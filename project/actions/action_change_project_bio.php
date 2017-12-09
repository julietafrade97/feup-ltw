<?php
    include_once('../includes/init.php');
    include_once('../database/project.php');

    $title = $_POST['title'];
    $description = $_POST['description'];
    $projecID = $_POST['projectID'];
    if($title !== null && $description !== null && is_numeric($projecID)) {
        if(changeBioProject($projecID, $title, $description))
            echo "";
        else
            echo "Error changing Project's Bio";
    }       
?>