<div id="dialog2" class="modal">
        <div class="modal-content">
        <p>Are you sure you want to delete this label?</p>
        <form class="buttons" action="../actions/action_delete_label.php" method="post">
            <input type="hidden" name="deleteCategoryID">
            <input onclick="closeDialog('Delete Label')" type="button" value="Cancel">
            <input type="submit" value="Delete">
        </form>
    </div>
</div>