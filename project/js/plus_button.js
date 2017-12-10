function plus_button() {
  if (document.getElementById("project_container") !== null) {
    openDialog("List");
  } else if (document.getElementById("list_grid") !== null) {
    openDialog("List");
  } else if (document.getElementById("project_grid") !== null) {
    openDialog("Add Project");
  }
}
