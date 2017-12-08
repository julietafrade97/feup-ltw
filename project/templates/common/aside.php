<aside>
    <div id="aside_container">
        <nav>
            <a href="projects.php">
                <div id="projects_menu_option" class="menu_option">
                    <span class="lnr lnr-book"></span>
                    <p id="projects_menu_text">Projects</p>
                </div>
            </a>
            <a href="lists.php">
                <div id="lists_menu_option" class="menu_option">
                    <span class="lnr lnr-file-empty"></span>
                    <p id="lists_menu_text">Lists</p>
                </div>
            </a>
        </nav>
        <div id="aside_content">

            <hr>
            <h2>Labels</h2>

            <section>
                <?php if(isset($categories))
                        foreach($categories as $category) {?>
                            <div class="label_option">
                            <div class="circle" style="background: <?php echo $category['Color']?>"></div>
                            <p><?php echo $category['Name']?></p>
                            <a href="#dialogLabel">
                                <span class="lnr lnr-pencil"></span>
                            </a>
                            </div>
                        <?php } ?>
                <a href="#dialogLabel">
                    <button class="label_button">
                        <span class="lnr lnr-plus-circle"></span>
                        <p>Add Label</p>
                    </button>
                </a>
            </section>

        </div>

</aside>

<?php
include_once('../templates/dialogs/label.php');
?>