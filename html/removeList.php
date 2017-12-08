<?php

include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
$listID = $_POST['listID'];
$toDelete = "List" . $listID;
deleteList($listID);
echo json_encode($toDelete);
 ?>
