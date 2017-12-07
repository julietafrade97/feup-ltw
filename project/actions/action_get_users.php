<?php
include_once('../includes/init.php');
include_once('../database/user.php');

$user = $_GET['username'];

if(($users = getUsersLike($user)) !== null) {
    echo json_encode($users);
} else {
    echo json_encode("");
}

?>
