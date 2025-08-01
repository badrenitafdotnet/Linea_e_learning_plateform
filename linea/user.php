<?php
Class User {

  private $username;
  private $password;
  private $type;
  private $etat;
  private $score;
  
  public function __construct($username= null,$password = null,$type = null){ 
    $this ->username = $username; 
    $this ->password = $password;
    $this ->type = $type;
  }

  public function get_user(){
    return $this -> type .' '.$this ->username.' '.$this ->password.' '.$this ->etat;  
  }
  
  public function get_type_db(Database $db){
	 $result = $db ->run_query("Select type from users where username = '".$this->username."'");
	 return !empty($result) ? $result[0]['type'] : null; 
  }
  
  public function modify_user($username= NULL,$password=NULL,$type=NULL){
	 if (isset($username) and $username != NULL) $this ->username = $username;
     if (isset($password) and $password != NULL) $this ->password = $password;
     if (isset($type) and $type != NULL) $this ->type = $type;
  }
  
  ///////////condition 1 :  password,type //password //type // etat //   a ajouter
  
  public function set_stat($etat){
      $this ->etat = $etat;
  }
  
  public function get_username(){
      return $this ->username;
  }
  
  public function get_password(){
      return $this ->password;
  }
  
   public function get_type(){
      return $this ->type;
  }
  
  public function auth_user(Database $db){
	  $entry = $db ->run_prep_query(
		"Select * from users where username = :username and password = :password",
	    ['username' => $this ->username,'password' => $this ->password]);
	  // Check if the user is found and redirect in accueil page 	    
	  if (count($entry) === 1 ) {
		 session_regenerate_id(true);
        
        // 2. Set ALL session data at once
        $_SESSION = [
            'username' => $entry[0]['username'],
            'type' => $entry[0]['type'],
            'last_login' => time(),
            'ip' => $_SERVER['REMOTE_ADDR'], // Security measure
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] // Security measure
        ];
		// 3. Force write and close session before redirect
        session_write_close();
        
        // 4. Ensure no output before header
        if (!headers_sent()) {
            header("Location: dashboard.php");
            exit();
        } else {
            die("Headers already sent! Check for spaces/echo before auth_user()");
        }}
	  else {
		$_SESSION['error_message'] = "Le nom d'utilisateur sélectionné ou le mot de passe est incorrect."; 
        header("Location: login.php");
        exit();
      }
	  $db -> close_cnx();	  	
  }	
  
   public function check_session(){
	  if(empty($this ->username)){
		  $this -> user_logout();}		
   }
	
    public function check_type_agent (){
		$this -> check_session();
		if ( $_SESSION['type'] != 'agent')$this -> user_logout();
    }
    public function check_type_admin (){
		$this -> check_session();
		if ( $_SESSION['type'] != 'admin')$this -> user_logout();
    }
    public function user_logout(): never{
		$_SESSION = []; // Clear session data
		// 3. Kill session cookie
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(
				session_name(), 
				'', 
				time() - 42000,
				$params["path"], 
				$params["domain"],
				$params["secure"], 
				$params["httponly"]
			);
		}
		session_destroy(); 
		header("Location: login.php");
		exit(); 
    } 
}

?>
