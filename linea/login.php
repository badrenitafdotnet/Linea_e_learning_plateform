<?php 
 require 'user.php';
 require 'db.php';
 require 'parser.php';
 parser::entete_login();
 $db = new Database();
if (session_status() === PHP_SESSION_ACTIVE) {
    $_SESSION = []; }
session_start();
if (isset($_POST['password']) and isset($_POST['username']) ){
	$user = new User($_POST['username'],$_POST['password']); 
	$user -> auth_user($db);	 
}
parser::body_login($db);
$db -> close_cnx();
echo '</html>';
?>
