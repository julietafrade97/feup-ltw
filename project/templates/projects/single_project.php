<div id="project_container">
    <div id="bio">
        <div class="header">
            <h1>Project</h1>
            <input type="text">
            <button class="edit">
                <span class="lnr lnr-pencil"></span>
            </button>
            <a href="#dialogLeaveProject">
                <button>
                    <span class="lnr lnr-exit"></span>
                </button>
            </a>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor eget quam non gravida. Proin quis risus
            nisi. Phasellus eu purus lectus. In pharetra molestie.</p>
        <textarea></textarea>
    </div>
    <div id="members">
        <div class="header">
            <h1>Members</h1>
            <a href="#dialogAddMember">
                <button>
                    <span class="lnr lnr-users"></span>
                </button>
            </a>
        </div>
        <div id="member_list">
            <img class="member" src="../assets/portrait.png">
            <img class="member" src="../assets/portrait.png">
            <img class="member" src="../assets/portrait.png">
            <img class="member" src="../assets/portrait.png">
        </div>
        <a href="#dialogSeeMembers">
            <button class="button_text">See All</button>
        </a>
    </div>
    <div id="lists">
        <h1>Lists</h1>
        <div id="grid">
            <div id="grid_container">

                <!-- CHANGE -->
                <div id="list_box">
                    <div id="list_box_header">
                        <h1> Title </h1>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                    <div id="task_list">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Task</label>
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Task</label>
                        <input type="checkbox" id="box-3">
                        <label for="box-3">Task</label>
                        <input type="checkbox" id="box-4">
                        <label for="box-4">Task</label>
                    </div>
                    <div id="more">
                        <div id="hover_box">
                            <p> SEE MORE </p>
                        </div>
                    </div>
                </div>

                <div id="list_box">
                    <div id="list_box_header">
                        <h1> Title </h1>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                    <div id="task_list">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Task</label>
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Task</label>
                        <input type="checkbox" id="box-3">
                        <label for="box-3">Task</label>
                        <input type="checkbox" id="box-4">
                        <label for="box-4">Task</label>
                    </div>
                    <div id="more">
                        <div id="hover_box">
                            <p> SEE MORE </p>
                        </div>
                    </div>
                </div>

                <div id="list_box">
                    <div id="list_box_header">
                        <h1> Title </h1>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                    <div id="task_list">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Task</label>
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Task</label>
                        <input type="checkbox" id="box-3">
                        <label for="box-3">Task</label>
                        <input type="checkbox" id="box-4">
                        <label for="box-4">Task</label>
                    </div>
                    <div id="more">
                        <div id="hover_box">
                            <p> SEE MORE </p>
                        </div>
                    </div>
                </div>

                <div id="list_box">
                    <div id="list_box_header">
                        <h1> Title </h1>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                    <div id="task_list">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Task</label>
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Task</label>
                        <input type="checkbox" id="box-3">
                        <label for="box-3">Task</label>
                        <input type="checkbox" id="box-4">
                        <label for="box-4">Task</label>
                    </div>
                    <div id="more">
                        <div id="hover_box">
                            <p> SEE MORE </p>
                        </div>
                    </div>
                </div>

                <!-- CHANGE -->


            </div>
        </div>
    </div>
</div>

<div id="dialogLeaveProject" class="overlay">
    <div class="question">
        <p>You're about to leave this project, are you sure?</p>
        <div class="buttons">
            <a href="#">
                <button>Cancel</button>
            </a>
            <button>Leave</button>
        </div>
    </div>
</div>

<div id="dialogAddMember" class="overlay">
    <div class="question">
        <p>Add member to project.</p>
        <input name="username" class="w3-input w3-border" type="text" placeholder="Username" oninput="addUserProject(this)">
        <div class="buttons">
            <a href="#">
                <button>Cancel</button>
            </a>
            <button>Confirm</button>
        </div>
    </div>
</div>

<div id="dialogSeeMembers" class="overlay">
    <div class="question">
        <p>Members</p>
        <div id="members_list">
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
            <div class="info">
                <img class="member" src="../assets/portrait.png">
                <p>John Doe</p>
            </div>
        </div>
        <div class="buttons">
            <a href="#">
                <button>Close</button>
            </a>
        </div>
    </div>
</div>