/*
 * dialog1 : add label
 * dialog2 : delete label
 * dialog3 : leave project
 * dialog4 : add member
 * dialog 5 : all members
 * dialog 6 : delete list
 * dialog 7: delete account
 * dialog 8: change label
 */

// Load the dialogs
var dialog1 = document.getElementById("dialog1");
var dialog2 = document.getElementById("dialog2");
var dialog3 = document.getElementById("dialog3");
var dialog4 = document.getElementById("dialog4");
var dialog5 = document.getElementById("dialog5");
var dialog6 = document.getElementById("dialog6");
var dialog7 = document.getElementById("dialog7");
var dialog8 = document.getElementById("dialog8");

function openDialog(value) {
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
    case "Change Label":
      dialog8.style.display = "block";
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
    case "Change Label":
      dialog8.style.display = "block";
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
  }
};
