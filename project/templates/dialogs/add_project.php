<div id="dialog10" class="modal">
    <form class="modal-content" action="../actions/action_create_project.php" method="post">
        <p>Add Project</p>
        <input name="title" class="w3-input w3-border" type="text" placeholder="Title" required>
        <textarea name="Description" rows="4" cols="50" placeholder="Description"></textarea>
        <input type="hidden" name="projectUserID" value="<?php echo htmlentities($userID)?>">
        <div class="buttons">
            <input onclick="closeDialog('Add Project')" type="button" value="Cancel">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>