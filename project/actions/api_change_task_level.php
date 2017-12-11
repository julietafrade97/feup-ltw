<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$newPriority = $_POST['newPriority'];
$id = $_POST['taskID'];

if(($newPriority != 0 && $newPriority != 1) || !is_numeric($id)) {
    echo "Error changing task level";
}
if(updateTaskPriority($id, $newPriority)) {
    echo "";
} else {
    echo "Error changing task level";
}


?>