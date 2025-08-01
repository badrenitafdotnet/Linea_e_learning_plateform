<?php
  require 'user.php';
  // Initialiser la session
  session_start();
  // Détruire la session.
  if (isset($_SESSION['username'])){
	$user = new User($_SESSION['username']);
	$user ->user_logout();}
  else{
	header("Location: login.php");
	exit();   
  }
?>
