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
  		$stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, NULL, :UserID)');
  		$stmt->bindParam(':Name', $categoryName);
        $stmt->bindParam(':Color', $categoryColor);
        $stmt->bindParam(':UserID', $userID);  
  		return $stmt->execute() !== false;
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
        $stmt = $dbh->prepare('INSERT INTO Category(Name, Color, ProjectID, UserID) VALUES (:Name, :Color, :ProjectID, NULL)');
        $stmt->bindParam(':Name', $categoryName);
        $stmt->bindParam(':Color', $categoryColor);
        $stmt->bindParam(':ProjectID', $projectID);  
        return $stmt->execute() !== false;
    }

?>