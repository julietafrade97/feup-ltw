<?php
    /**
     * Add new Category to a user
     * 
     * @param $categoryName Category's Name
     * @param $categoryColor Category's Color
     * @param $userID ID of the user that is creating the category
     * @return Returns the ID of the new Category if is was created and -1 otherwise 
     */
	function createCategoryUser($categoryName, $categoryColor, $userID){

        global $dbh;
        try {
  		    $stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, :ProjectID, :UserID)');
  		    $stmt->bindParam(':Name', $categoryName);
            $stmt->bindParam(':Color', $categoryColor);
            $stmt->bindValue(':ProjectID', null, PDO::PARAM_NULL);
            $stmt->bindParam(':UserID', $userID);
            if($stmt->execute())
                return $dbh->lastInsertId();
            else
                return -1;

        }catch(PDOException $e) {
            return -1;
        }
           
    }

    /**
     * Get All Categories from a user
     * 
     * @param $userID User's ID
     * @return Returns all the categories from the user with $userID
     */
    function getUserCategories($userID) {
        
        global $dbh;
        try {
            $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE UserID = ?');
            $stmt->execute(array($userID));
            return $stmt->fetchAll();

        }catch(PDOException $e) {
            return null;
        }
    }

    /**
     * Get All categories added to a user after the one with ID $firstCategoryID
     * 
     * @param $userID User's ID
     * @param $firstCategoryID ID of the first category to be returned
     * @return Returns all the user's categories which ID is equal or greater than $firstCategoryID
     */
    function getUserCategoriesAfterID($userID, $firstCategoryID) {

        global $dbh;
        try {
            $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE UserID = ? AND ID >= ?');
            $stmt->execute(array($userID, $firstCategoryID));
            return $stmt->fetchAll();
        
        } catch(PDOException $e) {
            return null;
        }
    }

    
    /**
     * Add new Category to a project
     * 
     * @param $categoryName Category's Name
     * @param $categoryColor Category's Color
     * @param $projectID ID of the project for which this category is being created
     * @return Returns the ID of the new Category if is was created and -1 otherwise
     */
	function createCategoryProject($categoryName, $categoryColor, $projectID){
        
        global $dbh;
        try {
            $stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, :ProjectID, :UserID)');
            $stmt->bindParam(':Name', $categoryName);
            $stmt->bindParam(':Color', $categoryColor);
            $stmt->bindParam(':ProjectID', $projectID);  
            $stmt->bindValue(':UserID', null, PDO::PARAM_NULL);
            if($stmt->execute())
                return $dbh->lastInsertId();
            else
                return -1;

        }catch(PDOException $e) {
            return -1;
        }
    }

    /**
     * Get All Categories from a project
     * 
     * @param $projectID Project's ID
     * @return Returns all the categories from the project with $projectID
     */
    function getProjectCategories($projectID) {
        
        global $dbh;
        try {
            $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE ProjectID = ?');
            $stmt->execute(array($projectID));
            return $stmt->fetchAll();

        }catch(PDOException $e) {
            return null;
        }
    }

    /**
     * Get All categories added to a project after the one with ID $firstCategoryID
     * 
     * @param $projectID Project's ID
     * @param $firstCategoryID ID of the first category to be returned
     * @return Returns all the project's categories which ID is equal or greater than $firstCategoryID
     */
    function getProjectCategoriesAfterID($projectID, $firstCategoryID) {
        
        global $dbh;
        try {
            $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE ProjectID = ? AND ID >= ?');
            $stmt->execute(array($projectID, $firstCategoryID));
            return $stmt->fetchAll();

        }catch(PDOException $e) {
            return null;
        }

    }

    function deleteCategory($categoryID) {
		global $dbh;
		try {

			$stmt = $dbh->prepare('DELETE FROM Category WHERE ID = :ID');
			$stmt->bindParam(':ID', $categoryID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
	}

?>