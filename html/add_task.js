
function addTask(){
  var choosenList= document.getElementById('myDropdown');
  var choosenListValue= choosenList.options[choosenList.selectedIndex].id;
  var oldList = document.getElementById(choosenListValue);
  var taskToAdd = document.querySelector('input[name=tasks]');
  var taskToAddValue = taskToAdd.value;
  var createdTask = document.createElement("li");

  let request = new XMLHttpRequest();

  request.open('POST', 'addSingleTask.php',false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({name: taskToAddValue, listID: choosenListValue}));

}

function removeList(){
  let  aEle = document.querySelectorAll("a");
  for(let a = 0; a < aEle.length; a++)  {
        aEle[a].addEventListener("click",function(){
       if(aEle[a].id> 0 ){
        let request = new XMLHttpRequest();
        request.addEventListener('load', working);
        request.open('POST', 'removeList.php',false);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.send(encodeForAjax({listID: aEle[a].id}));
      }
    });
  }
}

function working(){
  let answerJson = JSON.parse(this.responseText);
  let reposition = document.getElementsByName('lists');
  while(document.getElementById(answerJson) != null){
  document.getElementById(answerJson).remove();
  }
  let counter = 1;
 for(let a=0; a < reposition.length; a++){
      reposition[a].parentElement.className="List"+counter;
      counter++;
  }
}

function addList(){
  var nameList = document.querySelector('input[name=listToAdd]');
  var nameListValue = nameList.value;
  let request = new XMLHttpRequest();
  request.addEventListener('load',answerList);
  request.open('POST', 'addSingleList.php',false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({nameForList: nameListValue}));
}

function answerList(data){
 alert(this.responseText);
  let answerJson = JSON.parse(this.responseText);
  if(answerJson == "yes"){
    alert("Can't add more tasks. Delete one.");
  }
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
  request.addEventListener('load',markUpdate);
  request.open('POST','updateTask.php',false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({task_value: task_valuee, list_id: list_ide}));
  }
}

function markUpdate(){
  let answerJson = JSON.parse(this.responseText);
  let allTasks = document.getElementsByName("task");
  for(let b = 0; b < allTasks.length; b++ ){
    if(answerJson  == allTasks[b].value){
      allTasks[b].nextSibling.className="strike";
    }
  }
}


function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}
