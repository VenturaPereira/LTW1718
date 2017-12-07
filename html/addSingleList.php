<?php
include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$listName= $_POST['nameForList'];

$_SESSION['lists'] = $_SESSION['lists']+1;
echo $_SESSION['lists'];
$nameForClass = "List" . $_SESSION['lists'];

$row_from_user = getIdFromUser($_SESSION['username']);
$id_from_user = $row_from_user['id'];
addListToDb($listName, $nameForClass, $id_from_user);
 ?>
