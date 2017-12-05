let elem = document.getElementById("add_task");
elem.onclick= function(event){

    let task_list = document.getElementById('popup_task_list');

    let task = document.createElement('div');
    
    task.setAttribute('class', "task_line");
    task.innerHTML='<input type="checkbox" id="box-G"> <label for="box-G"> TEST </label> <a><span class="lnr lnr-star"></span></a> <a href="#verifyDeleteTask"><span class="lnr lnr-cross"></a>';

    task_list.insertBefore(task, task_list.lastChild);
}