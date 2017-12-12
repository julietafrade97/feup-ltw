<div id="project_container">
    <div id="bio">
        <div class="header">
            <h1>
                <?php echo $projectBio['Name']?>
            </h1>
            <input type="text">
            <button class="edit">
                <span class="lnr lnr-pencil"></span>
            </button>
            <button onclick="openDialog('Leave Project')">
                <span class="lnr lnr-exit"></span>
            </button>
        </div>
        <p>
            <?php echo $projectBio['Description'] ?>
        </p>
        <textarea></textarea>
    </div>
    <div id="members">
        <div class="header">
            <h1>Members</h1>
            <button onclick="openDialog('Add Member')">
                <span class="lnr lnr-users"></span>
            </button>
        </div>
        <div id="member_list">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
        </div>
        <button class="button_text" onclick="openDialog('All Members', <?php echo $projectID ?>)">See All</button>
    </div>
    <div id="lists">
        <h1>Lists</h1>
        <div id="grid">
            <div id="grid_container">

                <!-- CHANGE -->
                <div class="list_box">
                    <div id="list_box_header">
                        <h1>Title</h1>
                        <button onclick="openDialog('Change Label')">
                            <i class="fa fa-bookmark" aria-hidden="true" style="color: black"></i>
                        </button>
                    </div>
                    <div class="checkboxAndLabel">
                    </div>
                    <button id="more" onclick="openDialog('List')">
                        SEE MORE
                    </button>
                </div>
                <!-- CHANGE -->

            </div>
        </div>
    </div>
</div>

<?php
include_once('../templates/dialogs/add_member.php');
include_once('../templates/dialogs/members.php');
include_once('../templates/dialogs/leave_project.php');
?>