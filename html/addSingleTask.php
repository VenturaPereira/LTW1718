<?php
echo "viva";

include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
include_once('C:\xampp\htdocs\LTW1718\php\init.php');

$name= $_POST['name'];
$listID =  $_POST['listID'];
$checked = 0;

addTaskToDb($name,$checked,$listID);


?>
