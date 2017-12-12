<?php

	function createList($listName, $categoryID){

		global $dbh;
		try {

			$stmt = $dbh->prepare('INSERT INTO List(Name, CategoryID) VALUES (:Name, :CategoryID)');
			$stmt->bindParam(':Name', $listName);
			$stmt->bindParam(':CategoryID', $categoryID);
			if($stmt->execute())
		 		return $dbh->lastInsertId();
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
		
	}

	function getListName($listID) {
		global $dbh;
		try {

			$stmt = $dbh->prepare('SELECT Name FROM List WHERE ID = ?');
			$stmt->execute(array($listID));
			return $stmt->fetch();

		}catch(PDOExecption $e) {
			return null;
		}
	}

	function updateListName($newListName, $listID) {
		global $dbh;
		try {

			$stmt = $dbh->prepare('UPDATE List SET Name = :Name WHERE ID = :ID');
			$stmt->bindParam(':Name', $newListName);
			$stmt->bindParam(':ID', $listID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
	}

	function getUserLists($userID, $isArchived) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT List.ID, List.Name, Category.Color FROM List JOIN Category ON Category.ID = List.CategoryID WHERE Category.UserID = ? AND List.isArchived = ? ORDER BY Category.Color');
			$stmt->execute(array($userID, $isArchived));
			return $stmt->fetchAll();
		
		} catch(PDOException $e) {
			return null;
		}
	}

	function getCategoryLists($categoryID, $isArchived) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT ID, Name FROM List WHERE CategoryID = ? AND isArchived = ?');
			$stmt->execute(array($categoryID, $isArchived));
			return $stmt->fetchAll();

		} catch(PDOException $e) {
			return null;
		}
	}

?>