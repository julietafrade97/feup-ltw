<?php for($i=0; $i<count($lists); $i++) { ?>
<div id="list_box">
    <div id="list_box_header">
        <h1><?php echo $lists[$i]['Name']?></h1>
        <button onclick="openDialog('Change Label')">
            <i class="fa fa-bookmark" aria-hidden="true" style="color: <?php echo $lists[$i]['Color']?>"></i>
        </button>
    </div>
    <div class="checkboxAndLabel">
        <?php for($j=0; $j<count($tasks[$i]); $j++) {?>
            <input type="checkbox" id=<?php echo $tasks[$i][$j]['ID']?>>
            <label for= <?php echo $tasks[$i][$j]['ID']?>> <?php echo $tasks[$i][$j]['Name']?> </label>
        <?php } ?>
    </div>
    <button  id="more" onclick="openDialog('List',this)" value="<?php echo $lists[$i]['ID'] ?>">
        SEE MORE
    </button>
</div>
<?php }?>