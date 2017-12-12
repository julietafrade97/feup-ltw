<?php
include_once('../includes/init.php');
include_once('../database/category.php');

$isUser = $_POST['isUser'];

if($isUser != 0 && $isUser != 1) {
    echo "Error getting labels";
}

//is project
if($isUser == 0) {
    $id = $_GET['project_id'];
    if(!is_numeric($id))
        echo "Error getting labels";
    else {

        if(($labels = getProjectCategories($id)) !== null) {
            echo include_once('../templates/labels/labels_dialog_content.php');

        } else {
            echo "Error getting labels";
        }

    }
} else if($isUser == 1) {
    $id=getUserID();
    if(!is_numeric($id))
        echo "Error getting labels";
    else {
        if(($labels = getUserCategories($id)) !== null) {
            echo include_once('../templates/labels/labels_dialog_content.php');

        } else {
            echo "Error getting labels";
        }
    }
}

?>