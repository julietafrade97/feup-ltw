<?php


    function createProject($userID, $Name, $Description) {

        global $dbh;
        try {

            $stmt = $dbh->prepare('INSERT INTO Project(Name, Description, isArchived) VALUES(:Name, :Description, : isArchived)');
            $stmt->bindParam(':Name', $Name);
            $stmt->bindParam(':Description', $Description);
            $stmt->bindParam(':isArchived', FALSE);
            if($stmt->execute())
                $projectID =  $dbh->lastInsertedId();
            else
                return -1;

        } catch(PDOException $e) {
            
            return -1;
        }

        if(addUsertoProject($userID, $projectID))
            return $projectID;
        else
            return -1;
    }

    function addUsertoProject($userID, $projectID) {

        global $dbh;
        try {

            $stmt = $dbh->prepare('INSERT INTO ProjectUser(UserID, ProjectID) VALUES(:UserID, :ProjectID)');
            $stmt->bindParam(':UserID', $userID);
            $stmt->bindParam(':ProjectID', $projectID);
            if($stmt->execute())
                return true;
            else
                return false;

        } catch(PDOException $e) {
            return false;
        }
    }

    function removeUserFromProject($userID, $projectID) {

        global $dbh;
        try {

            $stmt = $dbh->prepare('DELETE FROM ProjectUser WHERE UserID = ? AND ProjectID = ?');
            $stmt->execute(array($userID, $projectID));
            return true;

        } catch(PDOException $e) {

            return false;
        }
    }

    function getUserProjects($userID, $isArchived) {

        global $dbh;
        try {

            $stmt = $dbh->prepare('SELECT Project.ID, Project.Name, Project.Description FROM ProjectUser, Project WHERE ProjectUser.UserID = ? AND Project.ID = ProjectUser.ProjectID AND Project.isArchived = ?');
            $stmt->execute(array($userID, $isArchived));
            return $stmt->fetchAll();
        
        }catch(PDOException $e) {
            return null;
        }
    }

    function getProjectUsers($projectID) {
        global $dbh;
        try {

            $stmt = $dbh->prepare('SELECT User.ID, User.Name, User.Photo FROM ProjectUser, User WHERE ProjectUser.ProjectID = ? AND User.ID = ProjectUser.UserID');
            $stmt->execute(array($projectID));
            return $stmt->fetchAll();
        
        }catch(PDOException $e) {
            return null;
        }
    }

    function changeBioProject($projectID, $newTitle, $newDescription) {
        global $dbh;
        try {

            $stmt = $dbh->prepare('UPDATE Project SET Name = ?, Description = ? WHERE ID = ?');
            $stmt->execute(array($newTitle, $newDescription, $projectID));
            return true;

        } catch(PDOException $e) {
            return false;
        }
    }

    function getProject($projectID) {
        global $dbh;
        try {
            $stmt = $dbh->prepare('SELECT * FROM Project WHERE ID = ?');
            $stmt->execute(array($projectID));
            return $stmt->fetch();

        } catch(PDOException $e) {
            return null;
        }
    }

?>