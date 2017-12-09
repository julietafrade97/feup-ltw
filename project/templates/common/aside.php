<aside>
    <div id="aside_container">
        <nav>
            <a id="projects_menu_option" class="menu_option" href="projects.php">
                <span class="lnr lnr-book"></span>
                <p id="projects_menu_text">Projects</p>
            </a>
            <a id="lists_menu_option" class="menu_option" href="lists.php">
                <span class="lnr lnr-file-empty"></span>
                <p id="lists_menu_text">Lists</p>
            </a>
        </nav>
        <div id="aside_content">

            <hr>
            <h2>Labels</h2>

            <section>

                <input type="radio" id="reset" name="label" />
                <label for="reset" class="label_option">
                    <div class="circle" style="background: black"></div>
                    <p>Reset</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button onclick="openDialog('Delete Label')">
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>

                <input type="radio" id="red" name="label" />
                <label for="red" class="label_option">
                    <div class="circle" style="background: #865757"></div>
                    <p>Red</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button>
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>

                <input type="radio" id="pink" name="label" />
                <label for="pink" class="label_option">
                    <div class="circle" style="background: #865786"></div>
                    <p>Pink</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button>
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>

                <input type="radio" id="blue" name="label" />
                <label for="blue" class="label_option">
                    <div class="circle" style="background: #576886"></div>
                    <p>Blue</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button>
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>

                <input type="radio" id="purple" name="label" />
                <label for="purple" class="label_option">
                    <div class="circle" style="background: #705786"></div>
                    <p>Purple</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button>
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>

                <input type="radio" id="brown" name="label" />
                <label for="brown" class="label_option">
                    <div class="circle" style="background: #866B57"></div>
                    <p>Brown</p>
                    <button>
                        <span class="lnr lnr-pencil"></span>
                    </button>
                    <button>
                        <span class="lnr lnr-cross"></span>
                    </button>
                </label>
                <br>
                <button onclick="openDialog('Add Label')">Add Label</button>
            </section>

        </div>

</aside>

<?php
include_once('../templates/dialogs/label.php');
include_once('../templates/dialogs/delete_label.php');
?>