<?php
  include_once('includes/init.php');
  
  if(!isset($_SESSION['username'])){
  	  include_once('templates/user/login.php');
  	  include_once('templates/common/footer.php');
  
  } else {
  	header("Location:pages/lists.php");
  }

?>