<?php

include_once('../includes/init.php');
include_once('../database/list.php');

$listID = $_POST['archieveListID'];

if(!is_numeric($listID)){
    $_SESSION['ERROR'] = "Error archieving list";
}
else {
    if(archieveList($listID, 'TRUE') == false) {
        $_SESSION['ERROR'] = $listID;
    }
}
header("Location:".$_SERVER['HTTP_REFERER']."");
?>