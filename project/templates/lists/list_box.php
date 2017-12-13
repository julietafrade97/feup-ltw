<?php for($i=0; $i<count($lists); $i++) { ?>
<div  class="list_box <?php echo "color".htmlentities(substr($lists[$i]['Color'],1))?>">
    <div id="list_box_header">
        <h1><?php echo htmlentities($lists[$i]['Name'])?></h1>
        <button onclick="plus_button(0, <?php echo htmlentities($lists[$i]['ID']) ?>)">
            <i class="fa fa-bookmark" aria-hidden="true" style="color: <?php echo htmlentities($lists[$i]['Color'])?>"></i>
        </button>
    </div>
    <div class="checkboxAndLabel">
        <?php for($j=0; $j<count($tasks[$i]); $j++) {?>
            <input type="checkbox" onchange="updateCheckbox(this)" id="<?php echo htmlentities($tasks[$i][$j]['ID'])?>">
            <label class="<?php if($tasks[$i][$j]['Priority'] == 1) echo 'priorityMode' ?>" for= <?php echo htmlentities($tasks[$i][$j]['ID'])?>> <?php echo htmlentities($tasks[$i][$j]['Name'])?> </label>
        <?php } ?>
    </div>
    <button id="more" onclick="openDialog('List', <?php echo htmlentities($lists[$i]['ID']) ?>)">
        See More
    </button>
</div>
<?php }?>