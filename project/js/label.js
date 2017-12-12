
var color;
var isUserVar;

function addLabel() {

  nameValue = document.querySelector("#color_form input[name=labelName]").value;

  color = document.querySelectorAll(
    "#color_form input[type=radio][name=labelColor]:checked"
  )[0];

  if(nameValue == null || color == null)
    return false;

  let colorValue = color.value;

  let isUserValue = null;

  if (document.getElementById("project_container") !== null) {
    isUserValue = false;

  } else if (document.getElementById("list_grid") !== null && document.getElementById("project_grid") === null) {
    isUserValue = true;
  }
  window.$_GET = new URLSearchParams(location.search);
  foreign = $_GET.get("project_id");

  if(foreign == null)
    foreign = -1;
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishAddLabel);
  request.open("post", "../actions/api_add_label.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(
    encodeForAjax({
      labelName: nameValue,
      labelColor: colorValue,
      isUser: isUserValue,
      foreignID: foreign
    })
  );
}

function finishAddLabel(event) {

 event.preventDefault();
  let section = document.getElementById("labels_section");
  let space = document.getElementById("labels_section").lastChild;
  if(space == null || section == null) 
    return;
  let categories = JSON.parse(this.responseText);
  if(categories == "") {
    return;
  }

  if(categories.length > 0) {
    let element;
    let inside;
    let delete_label = "'Delete Label'";
      for(let i=0; i<categories.length; i++) {
          let element = document.createElement("DIV");
          element.className += "label_option";
          element.innerHTML = '<div class="circle" style="background: '+categories[i].Color+'"></div><p>'+categories[i].Name+'</p><button><span class="lnr lnr-pencil"></span></button><button onclick="openDialog('+delete_label+')"><span class="lnr lnr-cross"></span></button>';
        section.insertBefore(element, space);
      }
  }
  document.querySelector("#color_form input[name=labelName]").value = "";
  color.checked = false;
  closeDialog('Add Label');
  
}


function searchLabel(color) {
  let all = document.querySelectorAll(".list_box");
  if(all == null)
    return;
  for (var i = 0; i < all.length; i++) {
    all[i].style.display = "none";
  }
  let newcolor = '.'+color;
  let selected = document.querySelectorAll(newcolor);
  
  if(selected == null)
    return;
  for (var i = 0; i < selected.length; i++) {
    selected[i].style.display = "block";
  }

}

function resetSearchLabel() {
  let all = document.querySelectorAll(".list_box");
  if(all == null)
    return;
  for (var i = 0; i < all.length; i++) {
    all[i].style.display = "flex";
  }
}

function getLabels(isUserValue) {
  if(isUserValue != 1 && isUserValue != 0)
    return false;
  isUserVar = isUserValue;
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishGetLabels);
  request.open("post", "../actions/api_get_labels.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({isUser: isUserValue}));
}

function finishGetLabels(event) {
  let dialog8 = document.getElementById('dialog8');
  if(dialog8!= null) dialog8.innerHTML = this.responseText;
  event.preventDefault();
}