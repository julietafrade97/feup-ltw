<h1>Personal Information</h1>
<div id="content">
    <div id="account">
        <div id="fields">
            <form action="action_login.php" method="post">
                <label>Name</label>
                <input name="name" class="w3-input w3-border" type="text" placeholder="John Doe" value="<?php echo $_POST['name'] ?>">
                <label>Username</label>
                <input name="username" class="w3-input w3-border" type="text" placeholder="johndoe123" value="<?php echo $_POST['username'] ?>">
                <label>Email</label>
                <input name="email" class="w3-input w3-border" type="email" placeholder="johndoe@gmail.com" value="<?php echo $_POST['email'] ?>">
                <label>Password</label>
                <input name="password" class="w3-input w3-border" type="password" placeholder="Password">
                <input name="passwordagain" class="w3-input w3-border" type="password" placeholder="Repeat Password">
                <input type="submit" name="Submit" value="Update">
            </form>
            <hr>
            <form action="../actions/action_delete_account.php" method="post">
                <input type="submit" name="Submit" value="Delete Account">
            </form>
        </div>
        <div id="photo_field">
            <form method="post">
                <label>Photo</label>
                <img id="photo" src="../assets/portrait.png" alt="Profile Picture">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" name="Submit" value="Upload">
            </form>
        </div>
    </div>
</div>
