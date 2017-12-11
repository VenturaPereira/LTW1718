<?php
include_once('init.php');

function getIdFromUser($email) {

   global $dbh;
   $stmt = $dbh->prepare('SELECT id FROM user WHERE email = ?');
    $stmt->execute(array($email));
   return $stmt->fetch();
 }


 function addTaskToDb($name,$checked,$listID){
   global $dbh;
  // echo $name;
//   echo $listID;
   $sqlToInsert='INSERT INTO tasks (name,checked, listID) VALUES(:name,:checked, :listID)';
   $stmt=$dbh->prepare($sqlToInsert);
   //bbinding variables

   $stmt->bindParam(':name',$name);
   $stmt->bindParam(':checked',$checked);
   $stmt->bindParam(':listID',$listID);
   // execute statement
   $stmt->execute();
   echo "executed";
 }

 function doListsExist($name, $userID) {

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM todoList WHERE name = ? AND userID = ?');
     $stmt->execute(array($name,$userID));
    return $stmt->fetch() !== false;
  }


  function getIdFromList($userID,$name){
    global $dbh;
    $stmt = $dbh->prepare('SELECT id FROM todoList WHERE userID = ? AND name= ?');
    $stmt->execute(array($userID,$name));
    return $stmt->fetch();


}

  function getTask($name, $listID){
    global $dbh;
    echo $name;
    echo $listID;
    $stmt = $dbh->prepare('SELECT * FROM tasks WHERE name = ? AND listID = ?');
    $stmt->execute(array($name, $listID));
    return $stmt->fetch();
  }

  function getAllTasks($listID){
      global $dbh;
      $stmt = $dbh->prepare('SELECT * FROM tasks WHERE listID = ?');
      $stmt->execute(array($listID));
      $allTasks = $stmt->fetchAll();
      foreach($allTasks as $task){
        if($task['checked'] == 1){
        echo "<input type='checkbox' onclick='markTask();' name='task' id=" . $listID ." value=" .$task['id'] . " checked='checked'> <span class='strike'>" . $task['name'] ."</span><br>";
      }
      else{
        echo "<input type='checkbox'  onclick='markTask();' name='task' id=" . $listID . " value=" . $task['id'] . "><span class='nostrike'> " . $task['name'] ."</span><br>";
      }
      }

  }

  function updateTasks($id){
    global $dbh;
    $checked = 1;
    $stmt = $dbh->prepare('UPDATE tasks SET checked = :checked WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':checked', $checked);
    return $stmt->execute();

  }

function addListToDb($name, $nameForClass, $user_id){
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO todoList (name, class, userID) VALUES (:name, :class, :userID)');
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':class', $nameForClass);
  $stmt->bindParam(':userID', $user_id);
  return $stmt->execute();
}


function getAllLists($userID){
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM todoList WHERE userID = ?');
  $stmt-> execute(array($userID));
  $listOfLists = $stmt->fetchAll();
  foreach($listOfLists as $list){
    echo "<div  id = " . $list['class'] . " class=" . $list['class'] . " ><ul id=" . $list['class'] . " name='lists' ><h2>" . $list['name'] . " <a href='#' id=" . $list['id'] . " onclick='removeList();'><img src='https://image.ibb.co/bAQ5kG/x.png'></a> </h2>";
    getAllTasks($list['id']);
    echo "</ul></div>";
  }
}

function getOptionLists($userID){
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM todoList WHERE userID = ?');
  $stmt-> execute(array($userID));
  $listOfLists = $stmt->fetchAll();
  foreach($listOfLists as $list){
    echo "<option id=" . $list['id']. ">" . $list['name'] . "</option>";
}
}

function getNumberOfLists($userID){
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM todoList WHERE userID = ?');
  $stmt-> execute(array($userID));
  $listOfLists = $stmt->fetchAll();
  return sizeof($listOfLists);
}

function getAllTasksList($listID){
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM tasks WHERE listID = ?');
  $stmt->execute(array($listID));
  $allTasks = $stmt->fetchAll();
}

function deleteList($listID){
  global $dbh;
  $stmt = $dbh->prepare('DELETE FROM todoList WHERE id = :id');
  $stmt->bindParam(':id', $listID);
  $stmt->execute();
  return $stmt->fetch();
}

function getAllListsToUpdate($userID){
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM todoList WHERE userID = ?');
  $stmt-> execute(array($userID));
  return $stmt->fetchAll();
}

function updateList($id, $class){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE todoList SET class = :class WHERE id= :id');
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':class', $class);
  return $stmt->execute();
}


 ?>
