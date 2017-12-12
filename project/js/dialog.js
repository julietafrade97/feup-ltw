/*
 * dialog1 : add label
 * dialog2 : delete label
 * dialog3 : leave project
 * dialog4 : add member
 * dialog 5 : all members
 * dialog 6 : delete list
 * dialog 7: delete account
 * dialog 8: change label
 * dialog 9: list
 * dialog 10: add project
 * dialog 11: clear archive;
 */

// Load the dialogs
let dialog1 = document.getElementById("dialog1");
let dialog2 = document.getElementById("dialog2");
let dialog3 = document.getElementById("dialog3");
let dialog4 = document.getElementById("dialog4");
let dialog5 = document.getElementById("dialog5");
let dialog6 = document.getElementById("dialog6");
let dialog7 = document.getElementById("dialog7");
let dialog8 = document.getElementById("dialog8");
let dialog9 = document.getElementById("dialog9");
let dialog10 = document.getElementById("dialog10");
let dialog11 = document.getElementById("dialog11");

function openDialog(value, id1, id2) {
  switch (value) {
    case "Add Label":
      dialog1.style.display = "block";
      break;
    case "Delete Label":
      dialog2.style.display = "block";
      break;
    case "Leave Project":
      dialog3.style.display = "block";
      break;
    case "Add Member":
      dialog4.style.display = "block";
      break;
    case "All Members":
      dialog5.style.display = "block";
      break;
    case "Delete List":
      dialog6.style.display = "block";
      break;
    case "Delete Account":
      dialog7.style.display = "block";
      break;
    case "Pick Label":
      getLabels(id1, id2);
      dialog8.style.display = "block";
      break;
    case "List":
      getTasks(id1);
      dialog9.style.display = "block";
      break;
    case "Add Project":
      dialog10.style.display = "block";
      break;
    case "Add List":
      addNewList();
      dialog8.style.display = "none";
      break;
    case "Clear Archive":
      dialog11.style.display = "block";
      break;
  }
}

function closeDialog(value) {
  switch (value) {
    case "Add Label":
      dialog1.style.display = "none";
      break;
    case "Delete Label":
      dialog2.style.display = "none";
      break;
    case "Leave Project":
      dialog3.style.display = "none";
      break;
    case "Add Member":
      dialog4.style.display = "none";
      break;
    case "All Members":
      dialog5.style.display = "none";
      break;
    case "Delete List":
      dialog6.style.display = "none";
      break;
    case "Delete Account":
      dialog7.style.display = "none";
      break;
    case "Pick Label":
      dialog8.style.display = "none";
      break;
    case "List":
      dialog9.style.display = "none";
      break;
    case "Add Project":
      dialog10.style.display = "none";
      break;
    case "Clear Archive":
      dialog11.style.display = "none";
      break;
  }
}

window.onclick = function(event) {
  switch (event.target) {
    case dialog1:
      dialog1.style.display = "none";
      break;
    case dialog2:
      dialog2.style.display = "none";
      break;
    case dialog3:
      dialog3.style.display = "none";
      break;
    case dialog4:
      dialog4.style.display = "none";
      break;
    case dialog5:
      dialog5.style.display = "none";
      break;
    case dialog6:
      dialog6.style.display = "none";
      break;
    case dialog7:
      dialog7.style.display = "none";
      break;
    case dialog8:
      dialog8.style.display = "none";
      break;
    case dialog9:
      dialog9.style.display = "none";
      break;
    case dialog10:
      dialog10.style.display = "none";
      break;
    case dialog11:
      dialog11.style.display = "none";
      break;
  }
};
