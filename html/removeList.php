<?php

include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
$listID = $_POST['listID'];
$toDelete = "List" . $listID;
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
echo json_encode($toDelete);
header('Location: http://localhost/LTW1718/html/page.php');
 ?>
