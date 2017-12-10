<aside>
    <div id="aside_container">
        <nav>
            <a class="menu_option" href="lists.php">
                <span class="lnr lnr-home"></span>
                <p>Home</p>
            </a>
            <a id="account_menu_option" class="menu_option" onclick='change_page_settings("Account", <?php echo json_encode($userinfo['
                Name ']) ?>, <?php echo json_encode($userinfo['Username '])?>,<?php echo json_encode($userinfo['Email
                '])?> )'>
                <span class="lnr lnr-user"></span>
                <p>Account</p>
            </a>
            <a id="archive_menu_option" class="menu_option" onclick='change_page_settings("Archive", <?php echo json_encode($userinfo['
                Name ']) ?>, <?php echo json_encode($userinfo['Username '])?>,<?php echo json_encode($userinfo['Email
                '])?> )'>
                <span class="lnr lnr-inbox"></span>
                <p>Archive</p>
            </a>
            <a id="about_menu_option" class="menu_option" onclick='change_page_settings("About")'>
                <span class="lnr lnr-heart"></span>
                <p>About</p>
            </a>
        </nav>
    </div>
</aside>