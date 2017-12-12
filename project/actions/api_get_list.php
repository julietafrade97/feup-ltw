<?php
include_once('../includes/init.php');
include_once('../database/list.php');
include_once('../database/task.php');
$listID = $_POST['listID'];

if(!is_numeric($listID))
    echo "";
$list = getList($listID);
$tasks = getTasks($listID, 'FALSE');
$tasksdone = getTasks($listID, 'TRUE');

if($tasks === null && $tasksdone === null) {
    echo "";
} else {
    echo include_once('../templates/lists/list_dialog_content.php');
}


