function plus_button() {
  if (document.getElementById("project_container") !== null) {
    openDialog("Choose Label", 0);
  } else if (document.getElementById("list_grid") !== null) {
    //openDialog("List", -1);
    openDialog("Choose Label", 1);
  } else if (document.getElementById("project_grid") !== null) {
    openDialog("Add Project");
  }
}