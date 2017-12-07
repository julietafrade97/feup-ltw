<?php
    include_once('../includes/init.php');
    if(getUserID() !== null  && getUsername() !== null) {
        unset($_SESSION['username']);
        unset($_SESSION['userID']);
        header('Location:../pages/login.php');   

    } else {
        $_SESSION['ERROR'] = "Error logging out!";
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
?>