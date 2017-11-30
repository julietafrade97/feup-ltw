<?php


  function isLoginCorrect($username, $password) {
    global $dbh;
    $passwordhashed = hash('sha256', $password);
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Username = ? AND Password = ?');
    $stmt->execute(array($username, $passwordhashed));
    if($stmt->fetch() !== false) {
      return getID($username);
    }
    else return -1;
  }

  function createUser($username, $password, $name, $email, $profilePhoto) {
    $passwordhashed = hash('sha256', $password);
    global $dbh;
  	$stmt = $dbh->prepare('INSERT INTO User(Username, Password, Name, Email, Photo) VALUES (:Username,:Password,:Name,:Email,:Photo)');
  	$stmt->bindParam(':Username', $username);
  	$stmt->bindParam(':Password', $passwordhashed);
  	$stmt->bindParam(':Name', $name);
  	$stmt->bindParam(':Email', $email);
  	$stmt->bindParam(':Photo', $profilePhoto);
    if($stmt->execute()){
      $id = getID($username);
      return $id;
    }
    else
      return -1;
    
  }

  function getUser($username) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM User WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetch();
  }

  function getID($username) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
    $stmt->execute(array($username));
    if($row = $stmt->fetch()){
      return $row['ID'];
    }
  }

  function duplicateUsername($username) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetch()  !== false;
  }

  function duplicateEmail($email) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT ID FROM User WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch()  !== false;
  }
  
?>
