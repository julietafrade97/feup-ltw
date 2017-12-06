<aside>
    <div id="aside_container">
        <nav>
            <a href="main_page.php">
                <div class="menu_option">
                    <span class="lnr lnr-home"></span>
                    <p>Home</p>
                </div>
            </a>
            <a onclick='change_page_settings("Account", <?php echo json_encode($userinfo['Name']) ?>, <?php echo json_encode($userinfo['Username'])?>,<?php echo json_encode($userinfo['Email'])?> )'>
                <div class="menu_option">
                    <span class="lnr lnr-user"></span>
                    <p>Account</p>
                </div>
            </a>
            <a href="#">
                <div class="menu_option">
                    <span class="lnr lnr-magic-wand"></span>
                    <p>Theme</p>
                </div>
            </a>
            <a onclick='change_page_settings("Archive", <?php echo json_encode($userinfo['Name']) ?>, <?php echo json_encode($userinfo['Username'])?>,<?php echo json_encode($userinfo['Email'])?> )'>
                <div class="menu_option">
                    <span class="lnr lnr-inbox"></span>
                    <p>Archive</p>
                </div>
            </a>
            <a onclick='change_page_settings("About")'>
                <div class="menu_option">
                    <span class="lnr lnr-heart"></span>
                    <p>About</p>
                </div>
            </a>
        </nav>
    </div>
</aside>
<main>
    <div id="settings"></div>
</main>