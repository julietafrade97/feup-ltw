<div id="dialog3" class="modal">
    <div class="modal-content">
        <p>You're about to leave this project, are you sure?</p>
        <div class="buttons">
            <input onclick="closeDialog('Leave Project')" type="button" value="Cancel">
            <form action="../actions/action_leave_project.php" method="post">
                <input type="submit" value="Leave">
                <input type="hidden" name="project_id" value="<?php echo htmlentities($_GET['project_id']); ?>">
            </form>
        </div>
    </div>
</div>