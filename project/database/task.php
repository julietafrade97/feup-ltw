<?php 

function createTask($listID, $Name, $Level, $Date) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('INSERT INTO Task(ListID, Name, Level, Date) VALUES(:ListID, :Name, :Level, :Date)');
        $stmt->bindParam(':ListID', $listID);
        $stmt->bindParam(':Name', $Name);
        $stmt->bindParam(':Level', $Level);
        $stmt->bindParam(':Date', $Date);
        if($stmt->execute()) {
            return $dbh->lastInsertId();

        } else {
            return -1;
        }
    } catch(PDOException $e) {
        return -1;
    }
}

function getTasks($listID, $isDone) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('SELECT ID, Name, Level, Date FROM Task WHERE ListID = ? AND isDone = ?');
        $stmt->execute(array($listID, $isDone));
        return $stmt->fetchAll();

    } catch(PDOException $e) {
        return null;
    }
}

function getLastTasks($listID, $isDone) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('SELECT ID, Name, Level, Date FROM Task WHERE ListID = ? AND isDone = ? LIMIT 5');
        $stmt->execute(array($listID, $isDone));
        return $stmt->fetchAll();

    } catch(PDOException $e) {
        return null;
    }
}

?>