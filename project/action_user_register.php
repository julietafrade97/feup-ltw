<?php
include_once('includes/init.php');
include_once('database/user.php');

 if (registerNewUser($_POST['username'], $_POST['password'], $_POST['name'], $_POST['email'], $_POST['profilePhoto'])) {
  		echo 'User Registered successfully';
 		//setCurrentUser($_POST['username'], $_POST['profilePhoto']);
 		
  }
  else{

  		echo 'ERROR';
  }

  //header('Location: ' . $_SERVER['HTTP_REFERER']);

 ?>