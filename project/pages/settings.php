<?php
include_once('../includes/init.php');
include_once('../database/user.php');
$userinfo = getUser($_SESSION['username']);
include_once('../templates/settings/header.php');
include_once('../templates/settings/aside.php');
include_once('../templates/settings/main_page.php');
include_once('../templates/common/footer.php');
?>