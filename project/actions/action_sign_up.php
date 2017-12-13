<?php
include_once('../includes/init.php');
include_once('../database/user.php');

	if(duplicateUsername($_POST['username'])){
		$_SESSION['ERROR'] = 'Duplicated Username';
		header("Location:".$_SERVER['HTTP_REFERER']."");
	}
	else if(duplicateEmail($_POST['email'])){
		$_SESSION['ERROR'] = 'Duplicated Email';
		header("Location:".$_SERVER['HTTP_REFERER']."");
	}
 	else if (($userID = createUser($_POST['username'], $_POST['password'], $_POST['name'], $_POST['email'])) != -1) {

  		echo 'User Registered successfully';
 		setCurrentUser($userID, $_POST['username']);
 		header("Location:../index.php");	
 	}
 	else{

  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>