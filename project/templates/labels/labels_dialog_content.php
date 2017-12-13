<div class="modal-content">
    <form id="label_form" action="#">
        <p>Pick a Label</p>

        <?php foreach($labels as $lable) { ?>
            <input type="radio" id="Label<?php echo htmlentities($lable['ID']) ?>" name="radioLabels" />
            <label for="Label<?php echo htmlentities($lable['ID']) ?>"><?php echo htmlentities($lable['Name'])?></label>
        <?php }?>

        <div class="buttons">
            <input onclick="closeDialog('Pick Label')" type="button" value="Cancel">
            <input id="pick-label-btn" type="button">
        </div>
    </form>
</div>
