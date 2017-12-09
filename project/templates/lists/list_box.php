<?php for($i=0; $i<count($lists); $i++) { ?>
<div id="list_box">
    <div id="list_box_header">
        <h1><?php echo $lists[$i]['Name']?></h1>
        <button onclick="openDialog('Change Label')">
            <i class="fa fa-bookmark" aria-hidden="true" style="color: <?php echo $lists[$i]['Color']?>"></i>
        </button>
    </div>
    <div id="task_list">
        <?php for($j=0; $j<count($tasks[$i]); $j++) {?>
            <li class="task_line">
                <input type="checkbox">
                <label><?php echo $tasks[$i][$j]['Name']?></label>
            </li>
        <?php } ?>
    </div>
    <button  id="more" onclick="openDialog('List')">
        SEE MORE
    </button>
</div>
<?php }?>