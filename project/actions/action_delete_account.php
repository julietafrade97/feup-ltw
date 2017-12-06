<?php
    include_once('../includes/init.php');
    include_once('../database/user.php');
    if(($ID = $_SESSION['userID']) != null) {
        if(deleteUser($ID)) {
            unset($_SESSION['userID']);
            unset($_SESSION['username']);
            header("Location:../pages/login.php");
        }
        else {
            $_SESSION['ERROR'] = "Error deleting your user account!";
            header("Location:".$_SERVER['HTTP_REFERER']."");
        }
    }
?>