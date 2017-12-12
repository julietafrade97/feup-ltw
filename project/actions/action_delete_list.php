<?php
include_once('../includes/init.php');
include_once('../database/list.php');

$listID = $_POST['deletelistID'];

if(!is_numeric($listID)) {
    $_SESSION['ERROR'] = "Error deleting list";
    

} else {
    if(!deleteList($listID)){
        $_SESSION['ERROR'] = "Error deleting list";   
    }
}

header("Location:".$_SERVER['HTTP_REFERER']."");


?>