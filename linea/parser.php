<?php
class Parser {
/////////Parser  Page Login ///////////////////
    public static function entete_login(){
		header('Cache-Control: no-store,  must-revalidate, max-age=0');
		header('Pragma: no-cache');
		echo '<html><link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>'; 
		echo '<link rel="shortcut icon" type="image/png" href="favicon.ico"/>';
		echo '<title>Login Page</title><link rel="stylesheet" href="css/login.css"/> ';
		echo '<script>function displaytext(){var ele = document.getElementById("username");document.getElementById("nom").value = ele.options[ele.selectedIndex].text;}</script>';		
        echo '<!--div class= \' p-2\' style = "display:block;">';
		echo'<div  class= \'p-2\' 	></div></div-->';
        	
    }
    
    public static function body_login(Database $db){
		echo '<div  class= \' p-0\' style= "background-color: rgba(22, 27, 34,0.8);display: block;margin-left:2%;margin-top:1%;width:45%;">';
		echo '<form class=\'form-control-sm mx-auto text-center\' style = \'display:block;background-color: rgba(0, 0, 0, 0.3);margin-top:5%;\' method="post" action="login.php">';
	    echo '<a style = "text-align:center;" href="https://www.linea-diagonal.com/"><img src="img/linea.png" alt="Ocean Call" > </a>';
	    echo '<h3 class="display-2" style="color: white;margin-top:40px;background-color: rgba(88, 166, 255,0.5);margin-bottom:5%;">';
	    echo '<br><strong>Bienvenue</strong><br>Plateform E-learning<br><br></h3>';
		echo "<label style = 'color:white;'>Identifiant de l'agent : </label><select id =\"username\" onchange = \"displaytext()\" name=\"user\" style=\" margin-left:10px;width:20%;margin-bottom:5%;\"><option value=\"select\"><strong>Nom d'utilisateur :</strong></option>";
		$users = $db ->run_query("Select username from users where type != 0 Order by type");
	    	foreach($users as $user) { $username = htmlspecialchars($user['username']); echo "<option value=\"$username\">$username</option>";
			}
		echo '</select>';
	    echo '<br><input id ="nom" class=\'form-control  form-control-lg col-4 mx-auto text-center\' style =\'width:20%;margin-bottom:5%;\' type="text" class="box-input" name="username" placeholder="Nom d\'utilisateur">';
	    echo '<br><input class=\'form-control  form-control-lg col-4 mx-auto text-center\' style =\'width:20%;margin-bottom:5%;\' type="password" class="box-input" name="password" placeholder="Mot de passe">';
        if (isset($_SESSION['error_message'])) {
		echo '<p class="errorMessage"><h3 class=\"bg-danger display-7\" style = \'color:red\'><strong>'.$_SESSION['error_message'].'</strong></h3></p>';
		unset($_SESSION['error_message']);  // Clear the error message after displaying
		}
	    echo '<br><input class= "btn btn-primary btn-lg text-white font-weight-bold" style="margin-bottom:5%;" type="submit" value="Valider :"></form>';
		echo '</div>';
    }
    public static function footer_login(){
    echo '';    
    }
/////////Parser  Page Accueil ///////////////////    
	public static function entete_dashboard(User $user){
		header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
		header('Pragma: no-cache');
		header('Expires: 0');	
		echo '<!DOCTYPE html><html lang="en">';    
	    echo '<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
				<title>Your Page Title</title>
				<link rel="stylesheet" href="style_dark.css"/>
			 </head>';
		echo '<body>';
		echo '<!-- Header -->
				<header class="header">
					<div class="logo">
						<img src="img/linea.png" alt="Company Logo">
						<!--span >Dashboard</span-->
					</div>
					<div style ="text-align:center;margin-left: auto;margin-right: auto;"><span class="page-title">Dashboard</span></div>
				</header>';
		
	}
	public static function sidebar_superadmin(User $user){
	     echo '<!-- Sidebar - Light Yellow -->
				<nav class="sidebar">
					<ul class="sidebar-menu">
						<li class="active">
						   <span class="menu-icon"><a class= \'child\' href= "dashboard.php">🎯</a></span>
						   <span class="menu-label"><a class= \'child\' href= "dashboard.php">Dashboard</a></span>
						</li>
						<li>
						  <span class="menu-icon"><a class= \'child\' href= "training.php">🏋️</a></span>  
						  <span class="menu-label"> <a class= \'child\' href= "training.php">Training</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "quiz.php">🧠</a></span>
							<span class="menu-label"> <a class= \'child\' href= "quiz.php">Quiz</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "scores.php">📋</a></span>
							<span class="menu-label"> <a class= \'child\' href= "scores.php">Scores</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "reports.php">📊</a></span>
							<span class="menu-label"> <a class= \'child\' href= "reports.php">Reports</a></span>
						</li>
						<li><span class="menu-icon"><a class= \'child\' href= "settings.php">⚙️</a></span>
							<span class="menu-label"> <a class= \'child\' href= "settings.php">Settings</a></span>
						</li>
						<li><span class="menu-icon"><a class= \'child\' href= "advsettings.php">⚙️</a></span>
							<span class="menu-label"> <a class= \'child\' href= "advsettings.php">Advanced Settings</a></span>
						</li>
					</ul>
				</nav>';			
	}
	public static function sidebar_admin(User $user){
	     echo '<!-- Sidebar - Light Yellow -->
				<div class="sidebar">
				<!--nav class="sidebar"-->
					<ul class="sidebar-menu">
						<li class="active">
						   <span class="menu-icon"><a class= \'child\' href= "dashboard.php">🎯</a></span>
						   <span class="menu-label"><a class= \'child\' href= "dashboard.php">Dashboard</a></span>
						</li>
						<li>
						  <span class="menu-icon"><a class= \'child\' href= "training.php">🏋️</a></span>  
						  <span class="menu-label"> <a class= \'child\' href= "training.php">Training</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "quiz.php">🧠</a></span>
							<span class="menu-label"> <a class= \'child\' href= "quiz.php">Quiz</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "scores.php">📋</a></span>
							<span class="menu-label"> <a class= \'child\' href= "scores.php">Scores</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "reports.php">📊</a></span>
							<span class="menu-label"> <a class= \'child\' href= "reports.php">Reports</a></span>
						</li>
						<li><span class="menu-icon"><a class= \'child\' href= "settings.php">⚙️</a></span>
							<span class="menu-label"> <a class= \'child\' href= "settings.php">Settings</a></span>
						</li>
					</ul>					
				<!--/nav-->
				<ul class="sidebar-menu" style = "background-color:blue;position: absolute; bottom: 5%;margin-left:10%"><li>
					<a class="child" href="logout.php">Log out</a></li></ul>
			</div>';			
	}
	public static function sidebar_agent(User $user){
	     echo '<!-- Sidebar - Light Yellow -->
				<nav class="sidebar">
					<ul class="sidebar-menu">
						<li class="active">
						   <span class="menu-icon"><a class= \'child\' href= "dashboard.php">🎯</a></span>
						   <span class="menu-label"><a class= \'child\' href= "dashboard.php">Dashboard</a></span>
						</li>
						<li>
						  <span class="menu-icon"><a class= \'child\' href= "training.php">🏋️</a></span>  
						  <span class="menu-label"> <a class= \'child\' href= "training.php">Training</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "quiz.php">🧠</a></span>
							<span class="menu-label"> <a class= \'child\' href= "quiz.php">Quiz</a></span>
						</li>
						<li>
							<span class="menu-icon"><a class= \'child\' href= "scores.php">📋</a></span>
							<span class="menu-label"> <a class= \'child\' href= "scores.php">Scores</a></span>
						</li>
						<li><span class="menu-icon"><a class= \'child\' href= "settings.php">⚙️</a></span>
							<span class="menu-label"> <a class= \'child\' href= "settings.php">Settings</a></span>
						</li>
					</ul>
				</nav>';			
	}
	public static function body_dashboard_superadmin(Database $db,User $user){
		echo '<main class="main-content">
					<!-- Operations -->
					<div class="operations-bar">
						<!--button class="btn btn-primary">Add New</button>
						<button class="btn btn-secondary">Export</button>
						<button class="btn btn-secondary">Filter</button>
						<input type="text" placeholder="Search..." style="flex-grow: 1; padding: 8px 12px; border: 1px solid #e0e0e0; border-radius: 5px; min-width: 200px;"-->
					</div>

					<!-- Table -->
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">🏋️ Training Overview</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">🧠 Quiz Insights</h2></div>
					</div>
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">👥 Online Users</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">📋 Scoreboard</h2></div>
					 </div>    
				</main>
			</body></html>';
	}
	public static function body_dashboard_admin(Database $db,User $user){
		echo '<main class="main-content">
					<!-- Operations -->
					<div class="operations-bar">
						<!--button class="btn btn-primary">Add New</button>
						<button class="btn btn-secondary">Export</button>
						<button class="btn btn-secondary">Filter</button>
						<input type="text" placeholder="Search..." style="flex-grow: 1; padding: 8px 12px; border: 1px solid #e0e0e0; border-radius: 5px; min-width: 200px;"-->
					</div>

					<!-- Table -->
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">🏋️ Training Overview</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">🧠 Quiz Insights</h2></div>
					</div>
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">👥 Online Users</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">📋 Scoreboard</h2></div>
					 </div>    
				</main>
			</body></html>';
	}
	public static function body_dashboard_agent(Database $db,User $user){
		echo '<main class="main-content">
					<!-- Operations -->
					<div class="operations-bar">
						<!--button class="btn btn-primary">Add New</button>
						<button class="btn btn-secondary">Export</button>
						<button class="btn btn-secondary">Filter</button>
						<input type="text" placeholder="Search..." style="flex-grow: 1; padding: 8px 12px; border: 1px solid #e0e0e0; border-radius: 5px; min-width: 200px;"-->
					</div>

					<!-- Table -->
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">🏋️ Training Overview</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">🧠 Quiz Insights</h2></div>
					</div>
					<div class="row">
						<div class="table-container half"><h2 class="dashboard-title">👥 Online Users</h2></div>
						<div class="table-container half"><h2 class="dashboard-title">📋 Scoreboard</h2></div>
					 </div>    
				</main>
			</body></html>';
	}
}    
?>
