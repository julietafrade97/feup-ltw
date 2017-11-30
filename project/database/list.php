<?php

	function createList($listName, $categoryID, $userID){

		global $dbh;
  		$stmt = $dbh->prepare('INSERT INTO List(Name, isArchived, idCategory) VALUES (:Name, :isArchived, :idCategory)');
  		$stmt->bindParam(':Name', $listName);
  		$stmt->bindParam(':idCategory', $categoryID);
  		return $stmt->execute() !== false;
	}

?>