<?php
include_once('../includes/init.php');
include_once('../database/project.php');

$projectID = $_POST['projectID'];

if(!is_numeric($projectID)) {
    $_SESSION['ERROR'] = "Error getting project Users";
    echo "error";
}
$members = getProjectUsers($projectID);

if($members === null) {
    $_SESSION['ERROR'] = "Error getting project Users";
    echo "error";
} else {
    echo include_once('../templates/projects/members_content.php');
}
