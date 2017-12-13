<?php

include_once('../php/init.php');
include_once('../php/add_task.php');
$listID = $_POST['listID'];
deleteList($listID);
$row_from_user = getIdFromUser($_SESSION['username']);
$id_from_user = $row_from_user['id'];
$listOfLists=getAllListsToUpdate($id_from_user);
$counter=1;
foreach($listOfLists as $list) {
  $class = "List" . $counter;
  updateList($list['id'],$class);
  $counter= $counter+1;
}
echo json_encode($listID);
 ?>
