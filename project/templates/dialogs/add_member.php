<div id="dialog4" class="modal">
    <div class="modal-content">
        <p>Add Member</p>
        <input name="username" class="w3-input w3-border" list="usernamesList" autocomplete="off" type="text" placeholder="Username" onkeyup="addUserProject(this)">
        <datalist id="usernamesList"> </datalist>
        <div class="buttons">
            <input onclick="closeDialog('Add Member')" type="button" value="Cancel">
            <input type="submit" value="Submit">
        </div>
    </div>
</div>