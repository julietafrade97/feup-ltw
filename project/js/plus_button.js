
function plus_button(){
  if (document.getElementById("project_box") === null && document.getElementById("project_container")===null) {
      add_list();
  }
}

function add_list(){
  /*alert("Add list");*/

  let list_grid = document.getElementById("grid_container");

  let new_list_box = document.createElement('div');

  new_list_box.innerHTML = '<div id="list_box"> <div id="list_box_header"> <h1> New Title </h1> <i class="fa fa-bookmark" aria-hidden="true"></i></div> <div id="task_list"> </div> <a id="more" href="#listPopUp" type="button">SEE MORE</a> </div>'

  list_grid.insertBefore(new_list_box, list_grid.lastChild);

}