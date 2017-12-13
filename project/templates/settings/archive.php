<?php
    include_once(__DIR__.'/../../includes/init.php');
    include_once(__DIR__.'/../../database/list.php');
    include_once(__DIR__.'/../dialogs/clear_archive.php');
    $archived_lists = getUserLists(getUserID(), 'TRUE');
?>

    <h1>Archive</h1>
    <div class="content">
        <div id="archive">
            <h2>Lists</h2>
            <ul>

                <?php for($i=0; $i<count($archived_lists); $i++) { ?>
                <li>
                    <span class="lnr lnr-chevron-right-circle"></span>
                    <p><?php echo $archived_lists[$i]['Name']?></p>
                    <form action="../actions/action_unarchive_list.php" method="post">
                        <input type="hidden" name="archievedListID" value="<?php echo $archived_lists[$i]['ID']?>">
                        <label class="archive_button"><span class="lnr lnr-heart-pulse"></span>
                        <input class="submit_button" type="submit" value="Submit"/></label>
                    </form>
                    <form action="../actions/action_delete_list.php" method="post">
                        <input type="hidden" name="deletelistID" value="<?php echo $archived_lists[$i]['ID']?>">
                        <label class="archive_button"><span class="lnr lnr-cross"></span>
                        <input class="submit_button" type="submit" value="Submit"/></label>
                    </form>
                </li>
                <?php }?>

            </ul>
            <input onclick="openDialog('Clear Archive')" type="submit" value="Clear">
        </div>
    </div>