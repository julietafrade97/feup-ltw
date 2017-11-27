<?php
include_once('includes/init.php');
include_once('database/user.php');

 if (($userID = registerNewUser($_POST['username'], $_POST['password'], $_POST['name'], $_POST['email'], $_POST['profilePhoto'])) != -1) {

  		echo 'User Registered successfully';
 		setCurrentUser($userID, $_POST['username']);	
 }
 else{

  		echo 'ERROR';
 }

 ?>