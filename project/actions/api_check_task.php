<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$isChecked = $_POST['is_checked'];
$taskID = $_POST['task_id'];

if(($isChecked != 'FALSE' && $isChecked != 'TRUE') || !is_numeric($taskID)) {
    $_SESSION['ERROR'] = "Error checking the task";
    echo "Error checking the task";
}
if(updateTaskChecked($taskID, $isChecked)) {
    echo "";
} else {
    $_SESSION['ERROR'] = "Error checking the task";
    echo "Error checking the task in data base";
}

?>