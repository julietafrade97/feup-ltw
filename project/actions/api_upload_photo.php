<?php
  include_once("../includes/init.php");
  include_once("../database/user.php");
  
  $target_dir = "../profilePictures/";
  $originalName = basename($_FILES["fileToUpload"]["name"]);
  $imageFileType = pathinfo($originalName,PATHINFO_EXTENSION);
  $target_file = $target_dir . getUserID() . "." . $imageFileType ;
  $uploadOk = 1;
 
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $_SESSION['ERROR'] = "ERROR: Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  //Overide previous picture
  if (file_exists($target_file)) {
    unlink($target_file);
  }


  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $_SESSION['ERROR'] =  "Error uploading photo";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      if(updateUserPhoto(getUserID(), getUserID() . "." . $imageFileType)==null){
        $_SESSION['ERROR'] = "Error uploading photo";
      }

    } else {
        $_SESSION['ERROR'] =  "Error uploading photo";
    }
  }

  header("Location:".$_SERVER['HTTP_REFERER']."");
?>
