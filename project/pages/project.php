<?php
include_once('../includes/init.php');
include_once('../database/category.php');
include_once('../database/project.php');
include_once('../database/list.php');
include_once('../database/task.php');

$projectID = $_GET['project_id'];
$categories = null;

if(!is_numeric($projectID))
    header('Location:notfound.php');    

$categories = getProjectCategories($projectID);
$lists = getProjectLists($projectID, 'FALSE');
$tasks = null;
for($i=0; $i<count($lists); $i++) {
    $tasks[$i] = getTasksDone($lists[$i]['ID'], 'FALSE');
}
if(empty($categories) || $categories == null)
    header('Location:notfound.php');

$projectBio = getProject($projectID);

if(empty($projectBio) || $projectBio == null)
    header('Location:notfound.php');

include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/contents/project.php');
include_once('../templates/common/footer.php');

?>