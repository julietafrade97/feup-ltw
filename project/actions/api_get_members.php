<?php
include_once('../includes/init.php');
include_once('../database/project.php');

$projectID = $_POST['projectID'];

if(!is_numeric($projectID))
    echo "";
$members = getProjectUsers($projectID);

if($members === null) {
    echo "";
} else {
    echo include_once('../templates/projects/members_content.php');
}
