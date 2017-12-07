<?php
include_once('../includes/init.php');
include_once('../database/category.php');
include_once('../database/list.php');
include_once('../database/task.php');
$categories = getUserCategories(getUserID());
$lists = null;
$tasks = null;
if($categories !== null) {
    for($i = 0; $i < count($categories); $i++) {
        if($categories[$i] !== null) {
            $lists[$i] = getLists($categories[$i]['ID'], 'FALSE');
            if($lists[$i] !== null) {
                for($j=0; $j < count($lists[$i]); $j++) {
                    $tasks[$i][$j] = getTasks($lists[$i][$j]['ID']);
                }
            }
        }
    }
}

include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/contents/list_grid.php');
include_once('../templates/common/footer.php');
?>