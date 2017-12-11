<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$id = $_POST['taskID'];

if(!is_numeric($id))
    echo "Error deleting task";

if(deleteTask($id)) {
    echo "";
} else {
    echo "Error deleting task";
}

?>