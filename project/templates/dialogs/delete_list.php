<div id="dialog6" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to delete this list?</p>
        <form class="buttons" action="../actions/action_delete_list.php" method="post" >
            <input type="hidden" name="deletelistID">
            <input onclick="closeDialog('Delete List')" type="button" value="Cancel">
            <input type="submit" value="Delete">
        </form>
    </div>
</div>