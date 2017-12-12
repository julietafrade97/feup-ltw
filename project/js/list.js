function addNewList() {
  let submit = document.getElementById("pick-label-btn");
  let label = document.querySelector(
    "input[type=radio][name=radioLabels]:checked"
  );
  if (label != null) label = label.getAttribute("id");
  if (label != null) label = label.substr(5);
  createListAjax(label);
}

function createListAjax(label) {
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishCreateList);
  request.open("post", "../actions/api_add_list.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({ labelID: label }));
}

function finishCreateList(event) {
  event.preventDefault();
  let newListID;
  if ((newListID = JSON.parse(this.responseText)) != -1) {
    openDialog("List", newListID);
  }
}
