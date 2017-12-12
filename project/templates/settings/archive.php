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
                <button>
                    <span class="lnr lnr-heart-pulse"></span>
                </button>
                <button>
                    <span class="lnr lnr-cross"></span>
                </button>
            </li>
            <?php }?>

        </ul>
        <input onclick="openDialog('Clear Archive')" type="submit" value="Clear">
    </div>
</div>