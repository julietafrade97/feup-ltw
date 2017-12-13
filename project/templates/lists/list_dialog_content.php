<div class="list_popup">
    <div id="pop_up_header">
        <button onclick="openDialog('Delete List', '<?php echo htmlentities($listID) ?>')">
            <span class="lnr lnr-trash"></span>
        </button>
        <form action="../actions/action_archieve_list.php" method="post">
            <input type="hidden" name="archieveListID" value="<?php echo htmlentities($listID) ?>">
            <label for="archive_btn"><span class="lnr lnr-inbox"></span></label>
            <input id="archive_btn" type="submit" value="Submit"/>
        </form>
        <button onclick="closeDialog('List')">
            <span class="lnr lnr-cross"></span>
        </button>
    </div>
    <div id="pop_up_title">
        <label name="labelListName" id="List<?php echo htmlentities($listID) ?>"><?php echo htmlentities($list['Name']) ?></label>
        <input type="text">
        <button class="edit" onclick="editListTitle(this)">
            <span class="lnr lnr-pencil icon"></span>
        </button>
        <div id="rectangle" style="background: <?php echo htmlentities($list['Color'])?>"></div>
    </div>
    <h3>Todo</h3>
    <ul id="incomplete-tasks">
        <?php foreach($tasks as $task)  {?>
        <li class="task_line checkboxAndLabel <?php if($task['Priority'] == 1) echo 'priorityMode' ?>" id="<?php echo htmlentities($task['ID'])?>">
            <input type="checkbox" onchange="updateCheckbox(this)" id="Task<?php echo htmlentities($task['ID'])?>">
            <label for="Task<?php echo htmlentities($task['ID'])?>"><?php echo htmlentities($task['Name'])?></label>
            <input type="text">
            <button class="edit" onclick="editTask(this)">
                <span class="lnr lnr-pencil icon"></span>
            </button>
            <button class="star" onclick="changeLevel(this)">
                <span class="lnr lnr-star-empty"></span>
                <span class="lnr lnr-star"></span>
            </button>
            <button class="delete" onclick="deleteTask(this)">
                <span class="lnr lnr-cross icon"></span>
            </button>
        </li>
        <?php } ?>
    </ul>
    <h3>Completed</h3>
    <ul id="completed-tasks">
        <?php foreach($tasksdone as $taskdone)  {?>
        <li class="task_line checkboxAndLabel <?php if($taskdone['Priority'] == 1) echo 'priorityMode' ?>" id="<?php echo htmlentities($taskdone['ID'])?>">
            <input type="checkbox" checked onchange="updateCheckbox(this)" id="Task<?php echo htmlentities($taskdone['ID'])?>">
            <label for="Task<?php echo htmlentities($taskdone['ID'])?>"><?php echo htmlentities($taskdone['Name']) ?></label>
            <input type="text">
            <button class="edit" onclick="editTask(this)">
                <span class="lnr lnr-pencil"></span>
            </button>
            <button class="star" onclick="changeLevel(this)">
                <span class="lnr lnr-star-empty"></span>
                <span class="lnr lnr-star"></span>
            </button>
            <button class="delete" onclick="deleteTask(this)">
                <span class="lnr lnr-cross"></span>
            </button>
        </li>
        <?php } ?>
    </ul>
    <h3>Add Item</h3>
    <div class="new_task">
        <label for="new-task"></label>
        <input id="new-task" type="text">
        <button id="add_button" onclick="addTask()">
            <span class="lnr lnr-plus-circle"></span>
        </button>
    </div>
</div>