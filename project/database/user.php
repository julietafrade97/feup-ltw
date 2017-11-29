<?php


  function isLoginCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }

  function registerNewUser($username, $password, $name, $email, $profilePhoto) {
    $passwordhashed = hash('sha256', $_POST['password']);
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
