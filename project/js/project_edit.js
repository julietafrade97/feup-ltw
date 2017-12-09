var bioContainer = document.getElementById("bio");

var editProject = function() {
  var editTitle = bioContainer.querySelector("input[type=text]");
  var labelTitle = bioContainer.querySelector("h1");
  var editDescription = bioContainer.querySelector("textarea");
  var labelDescription = bioContainer.querySelector("p");

  var containsClass = bioContainer.classList.contains("editMode");

  if (containsClass) {
    labelTitle.innerText = editTitle.value;
    labelDescription.innerText = editDescription.value;
  } else {
    editTitle.value = labelTitle.innerText;
    editDescription.value = labelDescription.innerText;
  }

  bioContainer.classList.toggle("editMode");
};

var bindProjectEvents = function() {
  if(bioContainer !== null){
    var editButton = bioContainer.querySelector("button.edit");
    editButton.onclick = editProject;
  }
};

bindProjectEvents();

// ADD A NEW USER TO THE PROJECT

let timeoutCurrentValue = null;
function addUserProject(input) {
  if (timeoutCurrentValue != null) {
    clearTimeout(timeoutCurrentValue);
  }
  timeoutCurrentValue = setTimeout(function() { getSimilarUsers(input.value) }, 1000);  
}

function getSimilarUsers(input) {
  let request = new XMLHttpRequest();
  request.addEventListener("load", usersReceived);
  request.open("get", "../actions/action_get_users.php?username=" + input, true);
  request.send();
}

function usersReceived() {
  let users = JSON.parse(this.responseText);
  for(let i=0; i<users.length; i++) {
    alert(users[i].Username);
  }
}
