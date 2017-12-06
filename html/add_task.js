

function addTask(){
  var choosenList= document.getElementById('myDropdown');
  var choosenListValue= choosenList.options[choosenList.selectedIndex].value;
  var oldList = document.getElementById(choosenListValue);
  var taskToAdd = document.querySelector('input[name=tasks]');
  var taskToAddValue = taskToAdd.value;
  var createdTask = document.createElement("li");

  let request = new XMLHttpRequest();

  request.open('POST', 'addSingleTask.php',false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({name: taskToAddValue, listID: choosenListValue}));

}



function markTask(){

  var allTasks = document.getElementsByName('task');

  var checkedTasks= [];
  for(let i = 0; i < allTasks.length; i++){
      if(allTasks[i].checked){
        checkedTasks.push(allTasks[i]);
      }
  }
  for(let b=0; b < checkedTasks.length;b++){
  var task_valuee =(checkedTasks[b].value);
  var list_ide = (checkedTasks[b].id);

  let request = new XMLHttpRequest();
  request.open('POST','updateTask.php',false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({task_value: task_valuee, list_id: list_ide}));
}
window.location = window.location.href;
}

function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}
