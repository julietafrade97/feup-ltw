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
                <a href="#dialogAddLabel">
                    <button class="label_button">
                        <span class="lnr lnr-plus-circle"></span>
                        <p>Add Label</p>
                    </button>
                </a>
            </section>

        </div>

</aside>

<div id="dialogAddLabel" class="overlay">
    <div class="question">
        <p>Add Label</p>
        <input name="username" class="w3-input w3-border" type="text" placeholder="Label Name">
        <div class="buttons">
            <a href="#">
                <button>Cancel</button>
            </a>
            <button>Confirm</button>
        </div>
    </div>
</div>