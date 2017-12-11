<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$text = $_POST['text'];
$listID = $_POST['listID'];

if(!is_numeric($listID)) {
    echo "Error adding task";
}

if(createTask($listID, $text)) {
    echo "";
} else {
    echo "Error adding task";
}

?>