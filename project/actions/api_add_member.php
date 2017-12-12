<?php
include_once('../includes/init.php');
include_once('../database/user.php');
include_once('../database/project.php');

$projectID = $_POST['project_ID'];
$username = $_POST['member_Username'];

$userID = getID($username);

if(!is_numeric($userID) || !is_numeric($projectID)){
    $_SESSION['ERROR'] = "Error adding member to the project";
    echo json_encode(-1);
}else if(addUsertoProject($userID, $projectID))
{
    echo json_encode(1);
}
else{
    $_SESSION['ERROR'] = "Error adding member to the project";
    echo json_encode(-1);
}

?>