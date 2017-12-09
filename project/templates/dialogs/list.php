<div id="dialog9"  class="modal">
    <div class="list_popup">
        <div id="pop_up_header">
            <button onclick="openDialog('Delete List')">
                <span class="lnr lnr-trash">
            </button>
            <button>
                <span class="lnr lnr-inbox">
            </button>
            <button onclick="closeDialog('List')">
                <span class="lnr lnr-cross">
            </button>
        </div>
        <div id="pop_up_title">
            <h1 contentEditable="true">Title</h1>
            <div id="rectangle" style="background: #865766;"></div>
        </div>
        <h3>Todo</h3>
        <ul id="incomplete-tasks">
            <li class="task_line checkboxAndLabel priorityMode">
                <input type="checkbox" id="task1">
                <label for="task1">Pay Bills</label>
                <input type="text">
                <button class="edit">
                    <span class="lnr lnr-pencil icon">
                </button>
                <button class="star">
                    <span class="lnr lnr-star-empty"></span>
                    <span class="lnr lnr-star"></span>
                </button>
                <button class="delete">
                    <span class="lnr lnr-cross icon">
                </button>
            </li>
            <li class="task_line checkboxAndLabel">
                <input type="checkbox" id="task2">
                <label for="task2">Go Shopping</label>
                <input type="text" value="Go Shopping">
                <button class="edit">
                    <span class="lnr lnr-pencil">
                </button>
                <button class="star">
                    <span class="lnr lnr-star-empty"></span>
                    <span class="lnr lnr-star"></span>
                </button>
                <button class="delete">
                    <span class="lnr lnr-cross">
                </button>
            </li>
        </ul>
        <h3>Completed</h3>
        <ul id="completed-tasks">
            <li class="task_line checkboxAndLabel">
                <input type="checkbox" checked id="task3">
                <label for="task3">See the Doctor</label>
                <input type="text">
                <button class="edit">
                    <span class="lnr lnr-pencil">
                </button>
                <button class="star">
                    <span class="lnr lnr-star-empty"></span>
                    <span class="lnr lnr-star"></span>
                </button>
                <button class="delete">
                    <span class="lnr lnr-cross">
                </button>
            </li>
        </ul>
        <h3>Add Item</h3>
        <div class="new_task">
            <label for="new-task"></label>
            <input id="new-task" type="text">
            <button id="add_button">
                <span class="lnr lnr-plus-circle"></span>
            </button>
        </div>
    </div>
</div>