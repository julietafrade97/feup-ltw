<div class="modal-content">
        <p>Members</p>
        <div id="members_list">
            <?php foreach($members as $member)  {?>
            <div class="info">
                <img class="member" src="<?php echo  '../profilePictures/'. $member['Photo'] ?>" alt="Project Member">
                <p><?php echo $member['Name']?></p>
            </div>
            <?php } ?>
        </div>
        <div class="buttons">
            <input onclick="closeDialog('All Members')" type="button" value="Close">
        </div>
    </div>