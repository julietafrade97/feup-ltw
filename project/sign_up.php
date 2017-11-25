<?php include_once('templates/common/header.php') ?>
<script type="text/javascript" src="js/api_register.js"></script>
<div id="signUpBox">
	<form onsubmit="return submitRegisterAjax(event);" action="" method="post">
		<input type="text" placeholder="write your username" id="username"><br>
		<input type="password" placeholder="write your password" id="password"><br>
		<input type="text" placeholder="write your name" id="name"><br>
		<input type="email" placeholder="write your email" id="email"><br>
		<input type="file" id="profilePhoto" accept="image/*"><br>
		<input type="submit" id="Submit" value="signUp">
	</form>
	<p></p>
</div>
<?php include_once('templates/common/footer.php') ?>