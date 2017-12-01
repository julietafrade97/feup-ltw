<?php
    /**
     * Add new Category to a user
     * 
     * @param $categoryName Category's Name
     * @param $categoryColor Category's Color
     * @param $userID ID of the user that is creating the category
     * @return returns True if is was created and False otherwise 
     */
	function createCategoryUser($categoryName, $categoryColor, $userID){

        global $dbh;
  		$stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, :ProjectID, :UserID)');
  		$stmt->bindParam(':Name', $categoryName);
        $stmt->bindParam(':Color', $categoryColor);
        $stmt->bindValue(':ProjectID', null, PDO::PARAM_NULL);
        $stmt->bindParam(':UserID', $userID);
        if($stmt->execute())
            return $dbh->lastInsertId();
        else
            return -1;
           
    }

    function getUserCategories($userID) {
        
        global $dbh;
        $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE UserID = ?');
        $stmt->execute(array($userID));
        return $stmt->fetchAll();
    }

    function getUserCategoriesAfterID($userID, $firstCategoryID) {

        global $dbh;
        $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE UserID = ? AND ID >= ?');
        $stmt->execute(array($userID, $firstCategoryID));
        return $stmt->fetchAll();
    }

    
    /**
     * Add new Category to a project
     * 
     * @param $categoryName Category's Name
     * @param $categoryColor Category's Color
     * @param $projectID ID of the project for which this category is being created
     */
	function createCategoryProject($categoryName, $categoryColor, $projectID){
        
        global $dbh;
        $stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, :ProjectID, :UserID)');
        $stmt->bindParam(':Name', $categoryName);
        $stmt->bindParam(':Color', $categoryColor);
        $stmt->bindParam(':ProjectID', $projectID);  
        $stmt->bindValue(':UserID', null, PDO::PARAM_NULL);
        if($stmt->execute())
            return $dbh->lastInsertId();
        else
            return -1;
    }


    function getProjectCategories($projectID) {
        
        global $dbh;
        $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE ProjectID = ?');
        $stmt->execute(array($projectID));
        return $stmt->fetchAll();
    }

    function getProjectCategoriesAfterID($projectID, $firstCategoryID) {
        
        global $dbh;
        $stmt = $dbh->prepare('SELECT ID, Name, Color FROM Category WHERE ProjectID = ? AND ID >= ?');
        $stmt->execute(array($projectID, $firstCategoryID));
        return $stmt->fetchAll();
    }

    

?>