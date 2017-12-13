<?php
include_once('../includes/init.php');
include_once('../database/category.php');
include_once('../database/list.php');

$labelID = $_POST['labelID'];
$userID = getUserID();


if(!is_numeric($labelID)) {
	$_SESSION['ERROR'] = "Error adding list";
	echo json_encode(-1);
	
} else if(!verifyUserCategory($userID, $labelID)) {
	$_SESSION['ERROR'] = "Error adding list";
	echo json_encode(-1);

} else {
	if(($getListID = createList("New List", $labelID)) != -1){
		echo json_encode($getListID);
	} else {
		$_SESSION['ERROR'] = "Error adding list";
		echo json_encode(-1);
	}
}
?>