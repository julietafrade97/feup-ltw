<?php
include_once('includes/init.php');
include_once('database/list.php');

	if(!createList($_POST['listName'], $_POST['CategoryID'], $_SESSION['userID'])){
		$_SESSION['ERROR'] = "Error creating the new list. Please try again";
	}
?>