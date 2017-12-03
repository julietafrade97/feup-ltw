<?php
include_once('includes/init.php');
include_once('database/category.php');

$categoryName = $_POST['categoryName'];
$categoryColor = $_POST['categoryColor'];
$foreignID = $_POST['foreignID'];
$isUser = $_POST['isUser'];

if($isUser == "True"){

    if(($categoryID = createCategoryUser($categoryName, $categoryColor, $foreignID)) != -1){
        $categories = getUserCategoriesAfterID($foreignID, $categoryID);
    }
    else
        $categories = "Error creating users category";
    
}
else {

    if(($categoryID = createCategoryProject($categoryName, $categoryColor, $foreignID)) != -1) {
        $categories = getProjectCategoriesAfterID($foreignID, $categoryID);
    }
    else
        $categories = "Error creating projects category";
    
}
echo json_encode($categories);

?>

