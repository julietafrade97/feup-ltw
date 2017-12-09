<?php
include_once('../includes/init.php');
include_once('../database/project.php');
$projectID = $_POST['project_id'];
$userID = getUserID(); 
echo $projectID;
echo $userID;

if(!is_numeric($userID) || !is_numeric($projectID))
header("Location:../pages/lists.php");

if(removeUserFromProject($userID, $projectID)) {
    header("Location:../pages/lists.php");

} else {
    $_SESSION['ERROR'] = "You can't leave this project!";
    header("Location:".$_SERVER['HTTP_REFERER']."");
}


?>