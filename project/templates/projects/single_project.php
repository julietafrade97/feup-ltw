<div id="project_container">
    <div id="bio">
        <div class="header">
            <h1>
                <?php echo htmlentities($projectBio['Name'])?>
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
            <?php echo htmlentities($projectBio['Description'])?>
        </p>
        <textarea></textarea>
    </div>
    <div id="members">
        <div class="header">
            <h1>Members</h1>
            <button onclick="openDialog('Add Member', <?php echo htmlentities($projectID) ?>)">
                <span class="lnr lnr-users"></span>
            </button>
        </div>
        <div id="member_list">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
        </div>
        <button class="button_text" onclick="openDialog('All Members', <?php echo htmlentities($projectID) ?>)">See All</button>
    </div>
    <div id="lists">
        <h1>Lists</h1>
        <div id="grid">
            <div id="grid_container">

            <?php for($i=0; $i<count($lists); $i++) { ?>
                <div  class="list_box <?php echo "color".htmlentities(substr($lists[$i]['Color'],1))?>">
                    <div id="list_box_header">
                        <h1><?php echo htmlentities($lists[$i]['Name'])?></h1>
                        <button onclick="plus_button(0, <?php echo htmlentities($lists[$i]['ID']) ?>)">
                            <i class="fa fa-bookmark" aria-hidden="true" style="color: <?php echo htmlentities($lists[$i]['Color'])?>"></i>
                        </button>
                    </div>
                    <div class="checkboxAndLabel">
                        <?php for($j=0; $j<count($tasks[$i]); $j++) {?>
                            <input type="checkbox" id="<?php echo htmlentities($tasks[$i][$j]['ID'])?>">
                            <label class="<?php if($tasks[$i][$j]['Priority'] == 1) echo 'priorityMode' ?>" for="<?php echo htmlentities($tasks[$i][$j]['ID'])?>"><?php echo htmlentities($tasks[$i][$j]['Name'])?> </label>
                        <?php } ?>
                    </div>
                    <button id="more" onclick="openDialog('List', <?php echo htmlentities($lists[$i]['ID']) ?>)">
                        See More
                    </button>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>

<?php
include_once('../templates/dialogs/add_member.php');
include_once('../templates/dialogs/members.php');
include_once('../templates/dialogs/leave_project.php');
?>