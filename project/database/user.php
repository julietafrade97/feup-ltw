<?php


  function isLoginCorrect($username, $password) {
    global $dbh;
    $passwordhashed = hash('sha256', $password);
    try {
      $stmt = $dbh->prepare('SELECT * FROM user WHERE Username = ? AND Password = ?');
      $stmt->execute(array($username, $passwordhashed));
      if($stmt->fetch() !== false) {
        return getID($username);
      }
      else return -1;

    } catch(PDOException $e) {
      return -1;
    }
  }

  function createUser($username, $password, $name, $email, $profilePhoto) {
    $passwordhashed = hash('sha256', $password);
    global $dbh;
    try {
  	  $stmt = $dbh->prepare('INSERT INTO User(Username, Password, Name, Email) VALUES (:Username,:Password,:Name,:Email)');
  	  $stmt->bindParam(':Username', $username);
  	  $stmt->bindParam(':Password', $passwordhashed);
  	  $stmt->bindParam(':Name', $name);
  	  $stmt->bindParam(':Email', $email);
      if($stmt->execute()){
        $id = getID($username);
        return $id;
      }
      else
        return -1;
    }catch(PDOException $e) {
      
      return -1;
    }
    
  }

  function getUser($username) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT Name, Username, Email , Photo FROM User WHERE Username = ?');
      $stmt->execute(array($username));
      return $stmt->fetch();
    
    }catch(PDOException $e) {
      return null;
    }
  }

  function deleteUser($userID) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('DELETE FROM User WHERE ID = ?');
      $stmt->execute(array($userID));
      return true;
    }
    catch(PDOException $e) {
      return false;
    }
  }

  function getID($username) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
      $stmt->execute(array($username));
      if($row = $stmt->fetch()){
        return $row['ID'];
      }
    
    }catch(PDOException $e) {
      return -1;
    }
  }

  function duplicateUsername($username) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
      $stmt->execute(array($username));
      return $stmt->fetch()  !== false;
    
    }catch(PDOException $e) {
      return true;
    }
  }

  function duplicateEmail($email) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM User WHERE email = ?');
      $stmt->execute(array($email));
      return $stmt->fetch()  !== false;
    
    }catch(PDOException $e) {
      return true;
    }
  }
  
  function getUsersLike($username) {
    global $dbh;
    try {

      $stmt = $dbh->prepare('SELECT username FROM User WHERE lower(username) LIKE lower(?) LIMIT 4');
      $stmt->execute(array("$username%"));
      return $stmt->fetchAll();
    
    }catch(PDOException $e) {
      return null;
    }
  }

  function updateUserInfo($userID, $name, $username, $email){
    global $dbh;

    try {
      $stmt = $dbh->prepare('UPDATE User SET Name = ?, Username = ?, Email = ? WHERE ID = ?');
      if($stmt->execute(array($name, $username, $email, $userID)))
          return true;
      else{
        return false;
      }   
    }catch(PDOException $e) {
      return false;
    }
  }

  function updateUserPassword($userID, $newpassword){
    $passwordhashed = hash('sha256', $newpassword);
    global $dbh;

    try {
      $stmt = $dbh->prepare('UPDATE User SET Password = ? WHERE ID = ?');
      if($stmt->execute(array($passwordhashed, $userID)))
          return true;
      else{
        return false;
      }   
    }catch(PDOException $e) {
      return false;
    }
  }

  function updateUserPhoto($userID, $photoPath) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('UPDATE User SET Photo = ? WHERE ID = ?');
      if($stmt->execute(array($photoPath, $userID)))
          return true;
      else
          return false;
    }catch(PDOException $e) {
      return false;
    }
  } 
  

  function getUserPhoto($userID) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT Photo FROM User WHERE ID = ?');
      $stmt->execute(array($userID));
      return $stmt->fetch();
    
    }catch(PDOException $e) {
      return null;
    }
  }
?>
