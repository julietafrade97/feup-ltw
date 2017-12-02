<?php 

function createTask($listID, $Name, $Level, $Date) {
    global $dbh;
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
}

?>