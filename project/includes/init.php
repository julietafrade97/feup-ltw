<?php
  include_once('includes/session.php');
  include_once('database/connection.php');

  if(isset($_SESSION['ERROR'])){
  	$error = $_SESSION['ERROR'];
  	unset($_SESSION['ERROR']);

  } else {
  	$error = "";
  }
?>
