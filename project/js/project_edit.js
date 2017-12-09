function encodeForAjax(data) {
  return Object.keys(data)
    .map(function(k) {
      return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
    })
    .join("&");
}


var bioContainer = document.getElementById("bio");
if(bioContainer !== null) {
  var editTitle = bioContainer.querySelector("input[type=text]");
  var editDescription = bioContainer.querySelector("textarea");
}

var editProject = function() {
  var labelTitle = bioContainer.querySelector("h1");
  var labelDescription = bioContainer.querySelector("p");

  var containsClass = bioContainer.classList.contains("editMode");

  if (containsClass) {
    labelTitle.innerText = editTitle.value;
    labelDescription.innerText = editDescription.value;
    changeProjectBio();
  } else {
    editTitle.value = labelTitle.innerText;
    editDescription.value = labelDescription.innerText;
  }

  bioContainer.classList.toggle("editMode");
};

var bindProjectEvents = function() {
  var editButton = bioContainer.querySelector("button.edit");
  editButton.onclick = editProject;
};

bindProjectEvents();


//update project bio information in database
function changeProjectBio() {
  let request = new XMLHttpRequest();
  request.open("POST", "../actions/action_change_project_bio.php", true);
  request.addEventListener("load", finishProjectBio);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  window.$_GET = new URLSearchParams(location.search);
  request.send(encodeForAjax({title: editTitle.value, description: editDescription.value, projectID: $_GET.get('project_id')}));
}

function finishProjectBio(event) {
  event.preventDefault();
  if(this.responseText !== "") {
    alert(this.responseText);
  }
}


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
