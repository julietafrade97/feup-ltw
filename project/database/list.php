<?php

	function createList($listName, $categoryID){

		global $dbh;
		try {

			$stmt = $dbh->prepare('INSERT INTO List(Name, isArchived) VALUES (:Name, :isArchived)');
  			$stmt->bindParam(':Name', $listName);
			if($stmt->execute())
		 		$listID = $dbh->lastInsertId();
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}

		//add db connection betweeen list and category
		if(addListCategory($listID, $categoryID))
			return $listID;
		else
			return -1;
		
	}

	function addListCategory($listID, $categoryID) {

		global $dbh;
		$stmt = $dbh->prepare('INSERT INTO ListCategory(CategoryID, ListID) VALUES (:CategoryID, :ListID)');
		try {

			$stmt->bindParam(':CategoryID', $categoryID);
			$stmt->bindParam(':ListID', $listID);
			if($stmt->execute())
				return true;
			else
				return false;

		}catch(PDOException $pdo_error) {
			return false;
		}
	}

	function getLists($categoryID, $isArchived) {
		global $dbh;
		try{
			$stmt = $dbh->prepare('SELECT Slist.ID, Slist.Name FROM List AS Slist, ListCategory AS SlistCat WHERE SlistCat.CategoryID = ? AND Slist.ID = SlistCat.ListID AND Slist.isArchived = ?');
			$stmt->execute(array($categoryID, $isArchived));
			return $stmt->fetchAll();

		} catch(PDOException $e) {
			return null;
		}
	}

	function getListCategories($listID) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT CategoryID FROM ListCategory WHERE ListID = ?');
			$stmt->execute(array($listID));
			return $stmt->fetchAll(); 
		
		}catch(PDOException $e) {
			return null;
		}

	}

?>