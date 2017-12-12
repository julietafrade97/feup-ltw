<?php
include_once('../includes/init.php');
include_once('../database/category.php');

$categoryID = $_POST['deleteCategoryID'];

if(!is_numeric($categoryID)) {
    $_SESSION['ERROR'] = "Error deleting label 1";
    

} else {
    if(!deleteCategory($categoryID)){
        $_SESSION['ERROR'] = "Error deleting label 2";   
    }
}

header("Location:".$_SERVER['HTTP_REFERER']."");


?>