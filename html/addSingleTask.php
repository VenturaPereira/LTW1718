<?php
echo "viva";

include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
include_once('C:\xampp\htdocs\LTW1718\php\init.php');

$name= $_POST['name'];
$listID =  $_POST['listID'];
$curr_id_user= getIdFromUser($_SESSION['username']);
echo "o benfica é merda";
$curr_id= getIdFromList($curr_id_user['id'],$listID);
echo $curr_id;

addTaskToDb($name, $curr_id['id']);


?>
