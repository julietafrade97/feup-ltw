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
            <a href="login.php" class="register_button">Login</a>
            <img src="../assets/logo.svg">
            <h1>Meraki</h1>
        </div>
        <div id="sign_up_content" class="register_content">
            <h1>Sign Up</h1>
            <form action="../action_sign_up.php" method="post">
                <input name="username" class="w3-input w3-border" type="text" placeholder="Username" required="required">
                <input name="password" class="w3-input w3-border" type="password" placeholder="Password" required="required">
                <input name="name" class="w3-input w3-border" type="text" placeholder="Name">
                <input name="email" class="w3-input w3-border" type="email" placeholder="Email" required="required">
                <input name="Submit" class="w3-input w3-border" type="submit" value="Sign up">
            </form>
        </div>
        <p>
            <?php echo $error ?>
        </p>
    </div>