<?php
include_once('../includes/init.php');
include_once('../database/list.php');

if(isset($_POST['listID']) && is_numeric($_POST['listID'])) {
    $listID = $_POST['listID'];
} else {
    $_SESSION['ERROR'] = "Error changing List Label";
    echo "error";
}
if(isset($_POST['newLabelID']) && is_numeric($_POST['newLabelID'])) {
    $newLabelID = $_POST['newLabelID'];
} else {
    $_SESSION['ERROR'] = "Error changing List Label";
    echo "error";
}

if(!changeLabelList($listID, $newLabelID)) {
    $_SESSION['ERROR'] = "Error changing List Label";
    echo "error";
}