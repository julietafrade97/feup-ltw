var idCounter = -1; //id for new checkbox

var listIDNumber = -1;

//New Task List Item
var createNewTaskElement = function(taskString) {
  if (taskString == "") {
    taskString = "New Task";
  }

  addTaskAjax(taskString);

  //Create List Item
  let listItem = document.createElement("li");
  //input (checkbox)
  let checkBox = document.createElement("input"); // checkbox
  //label
  let label = document.createElement("label");
  //input (text)
  let editInput = document.createElement("input"); // text
  //button.edit
  let editButton = document.createElement("button");
  let editSpan = document.createElement("span");
  //button.star
  let starButton = document.createElement("button");
  let starSpanEmpty = document.createElement("span");
  let starSpanFull = document.createElement("span");
  //button.delete
  let deleteButton = document.createElement("button");
  let deleteSpan = document.createElement("span");

  //Each element needs modifying
  listItem.className = "task_line checkboxAndLabel";

  checkBox.id = "" + idCounter;
  checkBox.onchange = function() {
    updateCheckbox(this);
  }
  label.htmlFor = "" + idCounter;
  idCounter = idCounter-1;

  checkBox.type = "checkbox";
  editInput.type = "text";

  editButton.className = "edit";
  editButton.onclick = function() {
    editTask(this);
  }
  editSpan.className = "lnr lnr-pencil";

  starButton.className = "star";
  starButton.onclick = function() {
    changeLevel(this);
  }
  starSpanEmpty.className = "lnr lnr-star-empty";
  starSpanFull.className = "lnr lnr-star";

  deleteButton.className = "delete";
  deleteButton.onclick = function() {
    deleteTask(this);
  }
  deleteSpan.className = "lnr lnr-cross";

  label.innerText = taskString;

  // each element needs appending
  editButton.appendChild(editSpan);
  deleteButton.appendChild(deleteSpan);
  starButton.appendChild(starSpanEmpty);
  starButton.appendChild(starSpanFull);

  listItem.appendChild(checkBox);
  listItem.appendChild(label);
  listItem.appendChild(editInput);
  listItem.appendChild(editButton);
  listItem.appendChild(starButton);
  listItem.appendChild(deleteButton);

  return listItem;
};

// Add a new task
var addTask = function() {
  console.log("Add task...");

  let taskInput = document.getElementById("new-task");

  let elems = document.getElementsByClassName("editMode");

  if (elems.length == 0) {
    //Create a new list item with the text from #new-task:
    let listItem = createNewTaskElement(taskInput.value);
    //Append listItem to incompleteTasksHolder
    let incompleteTasksHolder = document.getElementById("incomplete-tasks");
    incompleteTasksHolder.appendChild(listItem);
    taskInput.value = "";
  }
};

// Edit an existing task
var editTask = function(editButton) {
  console.log("Edit Task...");

  let listItem = editButton.parentNode;

  let editInput = listItem.querySelector("input[type=text]");
  let label = listItem.querySelector("label");

  let containsClass = listItem.classList.contains("editMode");
  //if the class of the parent is .editMode
  if (containsClass) {
    //switch from .editMode
    //Make label text become the input's value
    label.innerText = editInput.value;
    editTaskAjax(label.innerText, listItem);
  } else {
    //Switch to .editMode
    //input value becomes the label's text
    editInput.value = label.innerText;
  }

  // Toggle .editMode on the parent
  listItem.classList.toggle("editMode");
};

// Edit an existing task
var editListTitle = function(editButton) {
  console.log("Edit Task...");
 
  let listTitle = editButton.parentNode;
 
  let editInput = listTitle.querySelector("input[type=text]");
  let label = listTitle.querySelector("label");
 
  let containsClass = listTitle.classList.contains("editMode");
 
  if (containsClass) {
    label.innerText = editInput.value;
  } else {
    editInput.value = label.innerText;
  }
 
  listTitle.classList.toggle("editMode");
};

var changeLevel = function(levelButton) {
  console.log("Edit Level...");

  var listItem = levelButton.parentNode;

  var containsClass = listItem.classList.contains("priorityMode");

  if (containsClass) {
    listItem.classList.remove("priorityMode");
    changePriorityAjax(0, listItem);
  } else {
    listItem.classList.add("priorityMode");
    changePriorityAjax(1, listItem);
  }
};

// Delete an existing task
var deleteTask = function(deleteButton) {
  console.log("Delete task...");
  var listItem = deleteButton.parentNode;
  var ul = listItem.parentNode;

  deleteTaskAjax(listItem);

  //Remove the parent list item from the ul
  ul.removeChild(listItem);
};

// Mark a task as complete
var taskCompleted = function(checkbox) {
  console.log("Task complete...");
  //Append the task list item to the #completed-tasks
  var listItem = checkbox.parentNode;
  var completedTasksHolder = document.getElementById("completed-tasks");
  completedTasksHolder.appendChild(listItem);

};

// Mark a task as incomplete
var taskIncomplete = function(checkbox) {
  console.log("Task Incomplete...");
  // When checkbox is unchecked
  // Append the task list item #incomplete-tasks
  var listItem = checkbox.parentNode;
  var incompleteTasksHolder = document.getElementById("incomplete-tasks");
  incompleteTasksHolder.appendChild(listItem);
};

var updateCheckbox = function(checkbox){
  if(checkbox.checked)
    taskCompleted(checkbox);
  else taskIncomplete(checkbox);
}

//-- AJAX --//


function getTasks(listIDValue) {
      listIDNumber = listIDValue; 
      let request = new XMLHttpRequest();
      request.addEventListener("load", finishGetTasks);
      request.open("post", "../actions/api_get_list.php", true);
      request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      request.send(encodeForAjax({listID: listIDValue}));

}

function finishGetTasks(event) {

  let dialog9 = document.getElementById('dialog9');
  if(dialog9!= null) dialog9.innerHTML = this.responseText;
  event.preventDefault();
}

function updateTitleListAjax() {

  let request = new XMLHttpRequest();
  request.addEventListener("load", finishSaveTasks);
  request.open("post", "../actions/api_change_list_name.php");
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({listTitle: titleText, listID: listIDNumber}));
}

function addTaskAjax(textValue) {
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishAddTask);
  request.open("post", "../actions/api_add_task.php");
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({text: textValue, listID: listIDNumber}));
}

function finishAddTask(event) {
  event.preventDefault();
  if(this.responseText != "") {
    alert(this.responseText);
  }
}

function changePriorityAjax(newPriorityValue, listItem) {

  if(listItem == null)
    return false;
  let id = listItem.getAttribute("id");
  if(id == null)
    return false;
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishChangePriority);
  request.open("post", "../actions/api_change_task_level.php");
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({newPriority: newPriorityValue, taskID: id}));
}

function finishChangePriority(event) {
  event.preventDefault();
  if(this.responseText != "") {
    alert(this.responseText);
  }
}

function deleteTaskAjax(listItem) {
  if(listItem == null)
    return false;
  let id = listItem.getAttribute("id");
  if(id == null)
    return false;

  let request = new XMLHttpRequest();
  request.addEventListener("load", finishDeleteTask);
  request.open("post", "../actions/api_delete_task.php");
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({taskID: id}));
  
}

function finishDeleteTask(event) {
  event.preventDefault();
  if(this.responseText != "") {
    alert(this.responseText);
  }
}

function editTaskAjax(newName, listItem) {
  if(listItem == null)
    return false;
  let id = listItem.getAttribute("id");
  if(id == null)
    return false;

  let request = new XMLHttpRequest();
  request.addEventListener("load", finishEditTaskName);
  request.open("post", "../actions/api_edit_task_name.php");
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({taskName: newName, taskID: id}));
  
}

function finishEditTaskName(event) {
  event.preventDefault();
  if(this.responseText != "") {
    alert(this.responseText);
  }
}