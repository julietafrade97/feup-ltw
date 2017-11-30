<script src="js/api_add_category.js"></script>
<div id="addCategory">
	<form onsubmit="return submitCategoryAjax();" action="" method="post">
		<input type="text" placeholder="write category name" id="categoryName"><br>
		<input type="text" placeholder="write category color" id="categoryColor"><br>
		<input type="number" id="foreignID">
		<input type="radio" name="isUser" value="True" id="isUser">
		<input type="radio" name="isUser" value="False" id="isUser">
		<input type="submit" id="submitCategory" value="Add Category">
	</form>
	<p></p>
</div>
