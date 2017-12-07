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
                    <a href="#dialogLabel">
                        <span class="lnr lnr-pencil"></span>
                    </a>
                </div>
                <div class="label_option">
                    <div class="circle" style="background: #865766"></div>
                    <p>Label</p>
                    <a href="#dialogLabel">
                        <span class="lnr lnr-pencil"></span>
                    </a>
                </div>
                <div class="label_option">
                    <div class="circle" style="background: #865766"></div>
                    <p>Label</p>
                    <a href="#dialogLabel">
                        <span class="lnr lnr-pencil"></span>
                    </a>
                </div>
                <div class="label_option">
                    <div class="circle" style="background: #865766"></div>
                    <p>Label</p>
                    <a href="#dialogLabel">
                        <span class="lnr lnr-pencil"></span>
                    </a>
                </div>
                <a href="#dialogLabel">
                    <button class="label_button">
                        <span class="lnr lnr-plus-circle"></span>
                        <p>Add Label</p>
                    </button>
                </a>
            </section>

        </div>

</aside>

<div id="dialogLabel" class="overlay">
    <div class="question">
        <p>Pick a Name</p>
        <input name="username" class="w3-input w3-border" type="text" placeholder="Label Name">

        <p>Pick a Color</p>
        <div id="color_box">

            <input type="radio" id="radio1" name="radio1" value="#865757" />
            <label for="radio1">Red</label>

            <input type="radio" id="radio2" name="radio1" value="#865766" />
            <label for="radio2">Pink</label>

            <input type="radio" id="radio3" name="radio1" value="#576886" />
            <label for="radio3">Blue</label>

            <input type="radio" id="radio4" name="radio1" value="#57865E" />
            <label for="radio4">Green</label>

            <input type="radio" id="radio5" name="radio1" value="#866B57" />
            <label for="radio5">Brown</label>

            <input type="radio" id="radio6" name="radio1" value="#705786" />
            <label for="radio6">Purple</label>
        </div>

        <div class="buttons">
            <a href="#">
                <button>Cancel</button>
            </a>
            <a href="#">
                <button>Confirm</button>
            </a>
        </div>
    </div>
</div>