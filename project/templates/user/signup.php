<!DOCTYPE html>
<html>

<head>
    <title>Meraki</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/linearicons/Web%20Font/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="register_container">
        <div class="register_header">
            <a href="login.php" class="register_button">Login</a>
            <p>Welcome.
                <br>Thanks for joining us.</p>
        </div>
        <div class="register_content signup">
            <h1>Sign Up</h1>
            <form action="../action_sign_up.php" method="post" class="register_form">
                <input name="name" class="w3-input w3-border" type="text" placeholder="Name" required="required">
                <input name="username" class="w3-input w3-border" type="text" placeholder="Username" required="required">
                <span class="hint">Only lowercase and numbers, at least 6 characters.</span>
                <input name="email" class="w3-input w3-border" type="email" placeholder="Email" required="required">
                <input name="password" class="w3-input w3-border" type="password" placeholder="Password">
                <span class="hint">One uppercase, 1 symbol, 1 number, at least 6 characters.</span>
                <input name="passwordagain" class="w3-input w3-border" type="password" placeholder="Repeat Password">
                <span class="hint">Must match new password.</span>
                <input name="Submit" class="w3-input w3-border" type="submit" value="Next">
            </form>
            <p> <?php echo $error ?> </p>
        </div>