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
                        <a class="menu_option" href="projects.php">
                            <span class="lnr lnr-book"></span>
                            <p>Projects</p>
                        </a>
                        <a class="menu_option" href="lists.php">
                            <span class="lnr lnr-file-empty"></span>
                            <p>Lists</p>
                        </a>
                    </nav>

                    <div id="mobile_labels">
                        <hr>
                        <section>
                            <h2>Labels</h2>
                        </section>

                        <button class="addlabel" onclick="openDialog('Add Label')">Add Label</button>
                    </div>
                </div>
            </nav>

            <a id="logo" href="lists.php">
                <img src="../assets/logo.svg" alt="Meraki Logo (Cup of Coffee)">
                <h1>Meraki</h1>
            </a>

            <div id="header_buttons">

                <a onclick="plus_button(1)">
                    <div class="plus">
                        <span class="lnr lnr-cross"></span>
                    </div>
                </a>

                <a href="settings.php">
                    <span class="lnr lnr-cog"></span>
                </a>

            </div>
        </header>