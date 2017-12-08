<?php
include_once('../includes/init.php');
include_once('../database/category.php');
include_once('../database/list.php');
include_once('../database/task.php');

$projectID = $_GET['project_id'];
$categories = null;

if(!is_numeric($projectID))
    header('Location:notfound.php');    

$categories = getProjectCategories($projectID);

if($categories === null)
    header('Location:notfound.php');    

include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/contents/project.php');
include_once('../templates/common/footer.php');

?>