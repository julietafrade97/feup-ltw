<?php
include_once('../includes/init.php');
include_once('../database/category.php');
include_once('../database/list.php');
include_once('../database/task.php');
$lists = getUserLists(getUserID(), 'FALSE');
$categories = getUserCategories(getUserID());
$tasks = null;
for($i=0; $i<count($lists); $i++) {
    $tasks[$i] = getTasks($lists[$i]['ID'], 'FALSE');
}
include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/contents/list_grid.php');
include_once('../templates/common/footer.php');
?>