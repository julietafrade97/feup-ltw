<!DOCTYPE html>
<html>

<head>
    <title>Meraki</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/linearicons/Web Font/style.css">
    <script src="../js/api_register.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="register_container">
        <div class="register_header">
            <a href="signup.php" class="register_button">Sign Up</a>
            <img src="../assets/logo.svg">
            <h1>Meraki</h1>
            <p>Do something with soul.</p>
        </div>
        <div class="register_content">
            <h1>Login</h1>
            <form action="../action_login.php" method="post" class="register_form">
                <input name="username" class="w3-input w3-border" type="text" placeholder="Username" required="required">
                <input name="password" class="w3-input w3-border" type="password" placeholder="Password" required="required">
                <input type="submit" name="Submit" value="Next">
            </form>
        </div>
    </div>