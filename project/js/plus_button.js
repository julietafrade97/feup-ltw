function plus_button() {
  if (document.getElementById("project_container") !== null) {
    alert("add list to project");
  } else if (document.getElementById("list_grid") !== null) {
    add_list();
    alert("add list");
  } else if (document.getElementById("project_grid") !== null) {
    openDialog("Add Project");
  }
}

function add_list() {}
