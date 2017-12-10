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

                        <input type="radio" id="mobile_reset" name="label" />
                        <label for="mobile_reset" class="label_option">
                            <div class="circle" style="background: black"></div>
                            <p>Reset</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>

                        <input type="radio" id="mobile_red" name="label" />
                        <label for="mobile_red" class="label_option">
                            <div class="circle" style="background: #865757"></div>
                            <p>Red</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>

                        <input type="radio" id="mobile_pink" name="label" />
                        <label for="mobile_pink" class="label_option">
                            <div class="circle" style="background: #865786"></div>
                            <p>Pink</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>

                        <input type="radio" id="mobile_blue" name="label" />
                        <label for="mobile_blue" class="label_option">
                            <div class="circle" style="background: #576886"></div>
                            <p>Blue</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>

                        <input type="radio" id="mobile_purple" name="label" />
                        <label for="mobile_purple" class="label_option">
                            <div class="circle" style="background: #705786"></div>
                            <p>Purple</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>

                        <input type="radio" id="mobile_brown" name="label" />
                        <label for="mobile_brown" class="label_option">
                            <div class="circle" style="background: #866B57"></div>
                            <p>Brown</p>
                            <button>
                                <span class="lnr lnr-pencil"></span>
                            </button>
                            <button>
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </label>
                    </section>

                    <button class="btn_addlabel" onclick="openDialog('Add Label')">Add Label</button>

                </div>

                <a id="logo" href="lists.php">
                    <img src="../assets/logo.svg">
                    <h1>Meraki</h1>
                </a>

                <div id="header_buttons">

                    <a onclick="plus_button()">
                        <div class="plus">
                            <span class="lnr lnr-cross"></span>
                        </div>
                    </a>

                    <a href="settings.php">
                        <span class="lnr lnr-cog"></span>
                    </a>

                </div>
            </div>
        </header>