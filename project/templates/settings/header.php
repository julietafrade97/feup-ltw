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

    <div id="main_container">

        <header>
            <nav>
                <span id="menu-icon" onclick="openNav()">
                    <span class="lnr lnr-menu"></span>
                </span>

                <div id="sidenav">
                    <a class="closebtn" onclick="closeNav()">
                        <span class="lnr lnr-cross"></span>
                    </a>
                    <nav>
                        <a class="menu_option" href="lists.php">
                            <span class="lnr lnr-home"></span>
                            <p>Home</p>
                        </a>
                        <a class="menu_option" onclick='change_page_settings("Account")'>
                            <span class="lnr lnr-user"></span>
                            <p>Account</p>
                        </a>
                        <a class="menu_option" onclick='change_page_settings("Archive")'>
                            <span class="lnr lnr-inbox"></span>
                            <p>Archive</p>
                        </a>
                        <a class="menu_option" onclick='change_page_settings("About")'>
                            <span class="lnr lnr-heart"></span>
                            <p>About</p>
                        </a>
                    </nav>
                </div>
            </nav>

            <a id="logo" href="lists.php">
                <img src="../assets/logo.svg" alt="Meraki Logo (Cup of Coffee)">
                <h1>Meraki</h1>
            </a>
            
            <p id="error_messages">
                <?php echo htmlentities($error)?>
            </p>

            <div id="header_buttons">
                <a href="../actions/action_logout.php">
                    <span class="lnr lnr-power-switch"></span>
                </a>
            </div>
        </header>