<?php
include_once('../includes/init.php');
include_once('../database/list.php');

$title = $_POST['listTitle'];
$id = $_POST['listID'];

if(!is_numeric($id)) {
    $_SESSION['ERROR'] = "Error changing list Title";
    echo json_encode(-1);
}
    

if(updateListName($title, $id)) {
    echo json_encode(0);
} else {
    $_SESSION['ERROR'] = "Error changing list Title";
    echo json_encode(-1);
}

?>