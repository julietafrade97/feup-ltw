<?php
    include_once('../includes/init.php');
    include_once("../database/user.php");

    $name = $_POST['name'];
    $username= $_POST['username'];
    $email = $_POST['email'];
    $currpassword = $_POST['currpassword'];
    $newpassword = $_POST['password'];

    if((isLoginCorrect($_SESSION['userinfo']['Username'], $_POST['currpassword'])) != -1){
        if($name !== null && $username !== null && $email!==null) {

            if(updateUserInfo (getUserID(), $name, $username, $email)){
                setCurrentUser(getUserID(), $username);
                $_SESSION['userinfo'] = getUser($_SESSION['username']);

                if($newpassword != null){
                    if(!updateUserPassword(getUserID(), $newpassword))
                        $_SESSION['ERROR']= "Error: updating password";                    
                }

            } else $_SESSION['ERROR'] = "Error: updating data base";      

        } else $_SESSION['ERROR'] = "Error: name, username, email and password cannot be null";

    } else $_SESSION['ERROR'] = "Error: password is not correct";

    header("Location:".$_SERVER['HTTP_REFERER']."");
        
?>