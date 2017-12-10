<div id="dialog1" class="modal">
    <div class="modal-content" >
        <div id="color_form">
            <p>Pick a Name</p>
            <input name="labelName" class="w3-input w3-border" type="text" placeholder="Label Name">

            <p>Pick a Color</p>

            <input type="radio" id="radio1" name="labelColor" value="#865757" />
            <label for="radio1">Red</label>

            <input type="radio" id="radio2" name="labelColor" value="#865786" />
            <label for="radio2">Pink</label>

            <input type="radio" id="radio3" name="labelColor" value="#576886" />
            <label for="radio3">Blue</label>

            <input type="radio" id="radio4" name="labelColor" value="#57865E" />
            <label for="radio4">Green</label>

            <input type="radio" id="radio5" name="labelColor" value="#866B57" />
            <label for="radio5">Brown</label>

            <input type="radio" id="radio6" name="labelColor" value="#705786" />
            <label for="radio6">Purple</label>

            <div class="buttons">
                <input onclick="closeDialog('Add Label')" type="button" value="Cancel">
                <input onclick="addLabel()" type="button" value="Submit">
            </div>
        </div>
    </div>
</div>