<?php
include_once('init.php');
function addList($name,$userID){
    global $dbh;
    $sqlToInsert='INSERT INTO todoList (name, userID) VALUES(:name, :userID)';
    $stmt=$dbh->prepare($sqlToInsert);
    //bbinding variables

    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':userID',$userID);
    // execute statement
    $stmt->execute();
}


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




 ?>
