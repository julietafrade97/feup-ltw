<!--<div id="test">
	<script type="text/javascript" src="js/api_register.js"></script>
	<div id="loginBox">
		<form onsubmit="" action="" method="post">
			<input type="text" placeholder="write your username" id="username"><br>
			<input type="password" placeholder="write your password" id="password"><br>
			<input type="submit" id="SubmitLogin" value="Login">
		</form>
		<p></p>
	</div>
	
	<p>*Show user lists:*</p>
	<a href="templates/lists/list.php" class="button">List1</a>
	<p></p>
	<a href="templates/lists/list.php" class="button">List2</a>
	<p></p>
	<a href="templates/lists/add_list.php" class="button">Add List</a>
	<p></p>
	<p>*Show user categories:*</p>
	<a href="templates/categories/category.php" class="button">Category1</a>
	<p></p>
	<a href="templates/categories/category.php" class="button">Category2</a>
	<p></p>
	<a href="templates/categories/add_category.php" class="button">Add Category</a>
	<p></p>
	<p>*Show user projects:*</p>
	<a href="templates/projects/project.php" class="button">Project1</a>
	<p></p>
	<a href="templates/projects/project.php" class="button">Project2</a>
	<p></p>
	<a href="templates/projects/add_project.php" class="button">Add Project</a>
</div>-->

<?php
include_once('templates/common/header.php'); ?>
<script src="js/api_add_category.js" defer></script>
<?php 
include_once('templates/categories/add_category.php'); 
include_once('templates/common/footer.php');
?>
