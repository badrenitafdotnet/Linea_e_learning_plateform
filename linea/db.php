<?php
class Database {
    private $conn;

    public function __construct($host="localhost", $db="linea", $user="root", $pass="MW@dmin") {
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Method for queries without placeholders
    public function run_query($query) {
        try {
            $stmt = $this->conn->query($query); // Directly execute the query
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Return the results
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array if there's an error
        }
    }

    // Method for queries with placeholders
    public function run_prep_query($query, $params) {
        try {
            $stmt = $this->conn->prepare($query); // Prepare the query
            $stmt->execute($params); // Bind the parameters and execute
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Return the results
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array if there's an error
        }
    }
    public function close_cnx(){
		if ($this->conn){
		$this->conn = null;
		}
	}
    public function __destruct (){
		 $this->conn = null;
	}
}	
?>
