<?php for($i=0; $i<count($lists); $i++) { ?>
<div id="list_box">
    <div id="list_box_header">
        <h1><?php echo $lists[$i]['Name']?></h1>
        <a href="#dialogChangeLabel">
            <i class="fa fa-bookmark" aria-hidden="true" style="color: <?php echo $lists[$i]['Color']?>"></i>
        </a>
    </div>
    <div id="task_list">
        <?php for($j=0; $j<count($tasks[$i]); $j++) {?>
            <li class="task_line priorityMode">
                <input type="checkbox">
                <label><?php echo $tasks[$i][$j]['Name']?></label>
            </li>
        <?php } ?>
    </div>
    <a id="more" href="#listPopUp" type="button">SEE MORE</a>
</div>
<?php }?>