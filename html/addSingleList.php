<?php
include_once('../php/init.php');
include_once('../php/add_task.php');

$listName= $_POST['nameForList'];

$row_from_user = getIdFromUser($_SESSION['username']);
$id_from_user = $row_from_user['id'];
$_SESSION['lists'] = getNumberOfLists($id_from_user)+1;

if($_SESSION['lists'] < 9){
$nameForClass = "List" . $_SESSION['lists'];

addListToDb($listName, $nameForClass, $id_from_user);
echo json_encode("no");
} else {
  echo json_encode("yes");
}
 ?>
