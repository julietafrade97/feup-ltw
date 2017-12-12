<div id="dialog11" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to clear the archive? All archived lists will be deleted.</p>
        <div class="buttons">
            <input onclick="closeDialog('Clear Archive')" type="button" value="Cancel">
            <form action="../actions/action_clear_archive.php" method="post">
                <input type="submit" value="Clear">
            </form>
        </div>
    </div>
</div>