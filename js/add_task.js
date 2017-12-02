


function addTask(){
  var choosenList= document.getElementById('myDropdown');
  var choosenListValue= choosenList.options[choosenList.selectedIndex].value;
  var oldList = document.getElementById(choosenListValue);
  var taskToAdd = document.querySelector('input[name=tasks]');
  var TaskToAddValue = taskToAdd.value;
  var createdTask = document.createElement("li");
  createdTask.appendChild(document.createTextNode(TaskToAddValue));
  oldList.appendChild(createdTask);
}
