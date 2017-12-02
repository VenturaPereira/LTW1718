


function addTask(){
  var oldList = document.getElementById('first');
  var taskToAdd = document.querySelector('input[name=tasks]');
  var TaskToAddValue = taskToAdd.value;
  var createdTask = document.createElement("li");
  createdTask.appendChild(document.createTextNode(TaskToAddValue));
  oldList.appendChild(createdTask);
}
