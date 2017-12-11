<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$taskName = $_POST['taskName'];
$id = $_POST['taskID'];


if(!is_numeric($id)) {
    echo "Error changing task name";
}
if(editTaskName($id, $taskName)) {
    echo "ola";
} else {
    echo "Error changing task name";
}

?>