<?php
include_once('../includes/init.php');
include_once('../database/task.php');

$text = $_POST['text'];
$listID = $_POST['listID'];

if(!is_numeric($listID)) {
    $_SESSION['ERROR'] = "Error adding task";
    echo json_encode(-1);
}

if(($taskID = createTask($listID, $text)) != -1) {
    echo json_encode($taskID);
} else {
    $_SESSION['ERROR'] = "Error adding task";
    echo json_encode(-1);
}

?>