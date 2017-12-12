<?php

include_once('../includes/init.php');
include_once('../database/list.php');

if(clearArchive('TRUE') == false) {
    $_SESSION['ERROR'] = $listID;
}

header("Location:".$_SERVER['HTTP_REFERER']."");
?>