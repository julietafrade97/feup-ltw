function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

if (document.getElementById("project_box") !== null) {
  document.getElementById("aside_content").style.display = "none";
  document.getElementById("projects_menu_option").style.backgroundColor =
    "white";
  document.getElementById("projects_menu_text").style.fontWeight = "500";
} else if (document.getElementById("project_container") === null) {
  document.getElementById("lists_menu_option").style.backgroundColor = "white";
  document.getElementById("lists_menu_text").style.fontWeight = "500";
}
