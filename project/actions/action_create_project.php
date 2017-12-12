<?php
include_once('../includes/init.php');
include_once('../database/project.php');

if(isset($_POST['projectUserID']))
    $userID = $_POST['projectUserID'];

if(isset($_POST['title']))
    $title = $_POST['title'];

if(isset($_POST['Description']))
    $description = $_POST['Description'];

if(!is_numeric($userID)) {
    header('Location:notfound.php');
}

if(createProject($userID, $title, $description) == -1) {
    $_SESSION['ERROR'] = "Error creating new project";
}

header("Location:".$_SERVER['HTTP_REFERER']."");

?>