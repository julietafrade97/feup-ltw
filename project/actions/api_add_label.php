<?php
include_once('../includes/init.php');
include_once('../database/category.php');

$labelName = $_POST['labelName'];
$labelColor = $_POST['labelColor'];
$isUser = $_POST['isUser'];



if($isUser == true){

    $foreignIDUser = getUserID();
    if(!is_numeric($foreignIDUser)) {
        $_SESSION['ERROR'] = "Error creating user label";
        $categories = "";
    }

    if(($categoryID = createCategoryUser($labelName, $labelColor, $foreignIDUser)) != -1){
        $categories = getUserCategoriesAfterID($foreignIDUser, $categoryID);
    }
    else{
        $_SESSION['ERROR'] = "Error creating user label";
        $categories = "";
    }
}
else if($isUser == false){

    $foreignID = $_POST['foreignID'];

    if(!is_numeric($foreignID)) {
        $_SESSION['ERROR'] = "Error creating project label";
        $categories = "";
    }

    if(($categoryID = createCategoryProject($categoryName, $categoryColor, $foreignID)) != -1) {
        $categories = getProjectCategoriesAfterID($foreignID, $categoryID);
    }
    else{
        $_SESSION['ERROR'] = "Error creating project label";
        $categories = "";
    }
    
}

echo json_encode($categories);

?>

