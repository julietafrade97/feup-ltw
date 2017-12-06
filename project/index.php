<?php
  include_once('includes/init.php');
  
  if(!isset($_SESSION['username'])){
    header("Location:pages/login.php");
  } else {
  	header("Location:homepage.php");
  }

?>