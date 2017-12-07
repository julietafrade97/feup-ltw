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

function getTasks($listID) {
    global $dbh;
    try{
        $stmt = $dbh->prepare('SELECT Name, Level, Date FROM Task WHERE ListID = ?');
        $stmt->execute(array($listID));
        return $stmt->fetchAll();

    } catch(PDOException $e) {
        return null;
    }
}

?>