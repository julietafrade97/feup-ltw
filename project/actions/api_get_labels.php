<?php
include_once('../includes/init.php');
include_once('../database/category.php');

if(isset($_POST['isUser']))
    $isUser = $_POST['isUser'];
if(isset($_POST['foreignID'])) {
    $foreignID = $_POST['foreignID'];
}

if(($isUser != 0 && $isUser != 1) || !is_numeric($foreignID)) {
    $_SESSION['ERROR'] = "Error getting labels";
    echo "error";
}

//is project
if($isUser == 0) {
    if($foreignID == -1) {
        $_SESSION['ERROR'] = "Error getting labels";
        echo "error";
    }
    else {

        if(($labels = getProjectCategories($foreignID)) !== null) {
            echo include_once('../templates/labels/labels_dialog_content.php');

        } else {
            $_SESSION['ERROR'] = "Error getting labels 2";
            echo "error";
        }

    }
} else if($isUser == 1) {
    $id=getUserID();
    if(!is_numeric($id)) {
        $_SESSION['ERROR'] = "Error getting labels 3";
        echo "error";
    }
    else {
        if(($labels = getUserCategories($id)) !== null) {
            echo include_once('../templates/labels/labels_dialog_content.php');

        } else {
            $_SESSION['ERROR'] = "Error getting labels 4";
            echo "error";
        }
    }
}

?>