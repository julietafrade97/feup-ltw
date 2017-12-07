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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div id="main_container">

        <header>
            <div id="info">
                <nav id="nav_sidebar">

                    <span id="menu-icon" onclick="openNav()">
                        <span class="lnr lnr-menu"></span>
                    </span>

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" onclick="closeNav()">
                            <div class="closebtn">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                        <nav>
                            <a href="#">
                                <div class="menu_option">
                                    <span class="lnr lnr-book"></span>
                                    <p>Projects</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="menu_option">
                                    <span class="lnr lnr-file-empty"></span>
                                    <p>Lists</p>
                                </div>
                            </a>
                        </nav>

                        <hr>
                        <h2>Labels</h2>

                        <section>
                            <div class="label_option">
                                <div class="circle" style="background: #865766"></div>
                                <p>Label</p>
                            </div>
                            <div class="label_option">
                                <div class="circle" style="background: #865766"></div>
                                <p>Label</p>
                            </div>
                            <div class="label_option">
                                <div class="circle" style="background: #865766"></div>
                                <p>Label</p>
                            </div>
                            <div class="label_option">
                                <div class="circle" style="background: #865766"></div>
                                <p>Label</p>
                            </div>
                            <button class="label_button">
                                <span class="lnr lnr-plus-circle"></span>
                                <p>Add Label</p>
                            </button>
                        </section>
                </nav>

                <a href="lists.php">
                    <img src="../assets/logo.svg">
                </a>
                <h1>
                    <a href="lists.php">Meraki</a>
                </h1>

                <div id="search_box">
                    <i class="fa fa-search"></i>
                    <input type="search" id="search" placeholder="Search..." />
                </div>

                <nav>

                    <a href="#" id="more-icon">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>

                    <ul>

                        <li>
                            <a href="#" class="current">
                                <div class="plus">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                                <p>Create New</p>
                            </a>
                        </li>
                        <li>
                            <a href="settings.php">
                                <span class="lnr lnr-cog"></span>
                                <p>Settings</p>
                            </a>
                        </li>

                    </ul>

                </nav>
                </div>
        </header>