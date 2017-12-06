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
  var editButton = bioContainer.querySelector("button.edit");
  editButton.onclick = editProject;
};

bindProjectEvents();
