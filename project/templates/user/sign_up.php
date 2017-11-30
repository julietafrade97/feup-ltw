<div id="signUpBox">
	<form action="action_sign_up.php" method="post">
		<input type="text" placeholder="write your username" name="username"><br>
		<input type="password" placeholder="write your password" name="password"><br>
		<input type="text" placeholder="write your name" name="name"><br>
		<input type="email" placeholder="write your email" name="email"><br>
		<input type="submit" name="Submit" value="sign Up">
	</form>
	<p><?php echo $error ?></p>
</div>