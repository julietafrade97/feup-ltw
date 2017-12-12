<?php
    include_once(__DIR__.'/../../includes/init.php');
    include_once(__DIR__.'/../dialogs/delete_account.php');
?>

<h1>Personal Information</h1>
<div class="content">
    <div id="account">
        <div id="fields">
            <form action="../actions/action_update_user.php" method="post" class="register_form">
                <label>Name</label>
                <input name="name" class="w3-input w3-border" type="text" placeholder="Name" value="<?php echo $_SESSION['userinfo']['Name'] ?>" required="required">
                <label>Username</label>
                <input name="username" class="w3-input w3-border" type="text" placeholder="Username" value="<?php echo $_SESSION['userinfo']['Username'] ?>" required="required">
                <span class="hint">Only lowercase and numbers, at least 6 characters</span>
                <label>Email</label>
                <input name="email" class="w3-input w3-border" type="email" placeholder="Email" value="<?php echo $_SESSION['userinfo']['Email'] ?>" required="required">
                <label>Password</label>
                <input name="currpassword" class="w3-input w3-border" type="password" placeholder="Password" required="required">
                <span class="hint">One uppercase, 1 symbol, 1 number, at least 6 characters</span>
                <h5> Optional </h5>
                <input name="password" class="w3-input w3-border" type="password" placeholder="New Password">
                <span class="hint">One uppercase, 1 symbol, 1 number, at least 6 characters</span>
                <input name="passwordagain" class="w3-input w3-border" type="password" placeholder="Repeat New Password">
                <span class="hint">Must match new password</span>
                <input type="submit" name="Submit" value="Update">
            </form>
            <hr>
            <input onclick="openDialog('Delete Account')" type="submit" value="Delete Account">

        </div>
        <div id="photo_field">
            <form action="../actions/api_upload_photo.php" method="post" enctype="multipart/form-data">
                <label>Photo</label>
                <img id="photo" src="<?php echo  '../profilePictures/'.$_SESSION['userinfo']['Photo'] ?>" alt="Profile Picture">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" name="Submit" value="Upload">
            </form>
        </div>
    </div>
</div>