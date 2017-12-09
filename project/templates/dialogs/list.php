<div id="dialog9"  class="modal">
    <div class="list_popup">
        <div id="pop_up_header">
            <button onclick="openDialog('Delete List')">
                <span class="lnr lnr-trash">
            </button>
            <button>
                <span class="lnr lnr-inbox">
            </button>
            <a href="#">
                <button onclick="closeDialog('List')">
                    <span class="lnr lnr-cross">
                </button>
            </a>
        </div>
        <div id="pop_up_title">
            <h1 contentEditable="true">Title</h1>
            <div id="rectangle"></div>
        </div>
        <h3>Todo</h3>
        <ul id="incomplete-tasks">
            <li class="task_line priorityMode">
                <input type="checkbox">
                <label>Pay Bills</label>
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
            <li class="task_line editMode">
                <input type="checkbox">
                <label>Go Shopping</label>
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
            <li class="task_line">
                <input type="checkbox" checked>
                <label>See the Doctor</label>
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