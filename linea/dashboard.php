<?php 
require 'user.php';
require 'db.php';
require 'parser.php';
$db = new Database();
session_start();
//echo $_SESSION['type'];

if (isset($_SESSION['type']) and isset($_SESSION['username']) ){
	$user = new User($_SESSION['username'],$_SESSION['type']);
	$user -> check_session();
}
parser::entete_dashboard($user); //  Dashboard 
if ($_SESSION['type'] === '0'){
	parser::sidebar_superadmin($user);
	parser::body_dashboard_superadmin($db,$user);
	echo "SuperAdmin";}
if ($_SESSION['type'] === '1'){
	parser::sidebar_admin($user);
	parser::body_dashboard_admin($db,$user);
	echo "Admin";}
if ($_SESSION['type'] === '2'){
	parser::sidebar_agent($user);
	parser::body_dashboard_agent($db,$user);
	echo "Agent";}
?>

    

