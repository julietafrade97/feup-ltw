<?php 

function createTask($listID, $Name) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('INSERT INTO Task(ListID, Name) VALUES(:ListID, :Name)');
        $stmt->bindParam(':ListID', $listID);
        $stmt->bindParam(':Name', $Name);
        if($stmt->execute()) {
            return $dbh->lastInsertId();

        } else {
            return -1;
        }
    } catch(PDOException $e) {
        return -1;
    }
}

function updateTaskPriority($taskID, $newPriority) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('UPDATE Task SET Priority = :Priority WHERE ID = :ID');
        $stmt->bindParam(':Priority', $newPriority);
        $stmt->bindParam(':ID', $taskID);
        if($stmt->execute())
            return true;
        else
            return false;

    }catch(PDOException $e) {
        return false;
    }
}

function updateTaskChecked($taskID, $checked) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('UPDATE Task SET isDone = ? WHERE ID = ?');
        if($stmt->execute(array($checked, $taskID)))
            return true;
        else
            return false;

    }catch(PDOException $e) {
        return false;
    }
}

function deleteTask($taskID) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('DELETE FROM TASK WHERE ID = ?');
        if($stmt->execute(array($taskID)))
            return true;
        else
            return false;

    } catch(PDOException $e) {
        return false;
    }
}

function editTaskName($taskID, $taskName) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('UPDATE Task SET Name = ? WHERE ID = ?');
        if($stmt->execute(array($taskName, $taskID)))
            return true;
        else
            return false;

    }catch(PDOException $e) {
        return false;
    }
}


function updateTask($taskID, $newPriority, $newName, $newisDone) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('UPDATE Task SET Priority = :Priority , Name = :Name, isDone = :isDone, WHERE ID = :ID');
        $stmt->bindParam(':Priority', $newPriority);
        $stmt->bindParam(':Name', $newName);
        $stmt->bindParam(':isDone', $newisDone);
        $stmt->bindParam(':ID', $taskID);
        if($stmt->execute())
            return true;
        else
            return false;

    }catch(PDOException $e) {
        return false;
    }
}

function getTasks($listID, $isDone) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('SELECT ID, Name, Priority FROM Task WHERE ListID = ? AND isDone = ?');
        $stmt->execute(array($listID, $isDone));
        return $stmt->fetchAll();

    } catch(PDOException $e) {
        return null;
    }
}

function getTasksDone($listID, $isDone) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('SELECT ID, Name, Priority FROM Task WHERE ListID = ? AND isDone = ? LIMIT 5');
        $stmt->execute(array($listID, $isDone));
        return $stmt->fetchAll();

    } catch(PDOException $e) {
        return null;
    }
}

?>