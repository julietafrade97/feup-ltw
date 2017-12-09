<?php
include_once('../includes/init.php');
include_once('../database/project.php');
$projects = getUserProjects(getUserID(), 'FALSE');

for($i=0; $i<count($projects); $i++) {
    $users[$i] = getProjectUsers($projects[$i]['ID']);
}
include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/contents/project_grid.php');
include_once('../templates/common/footer.php');
?>