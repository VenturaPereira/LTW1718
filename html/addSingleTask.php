<?php
echo "viva";

include_once('../php/add_task.php');
include_once('../php/init.php');

$name= $_POST['name'];
$listID =  $_POST['listID'];
$checked = 0;

addTaskToDb($name,$checked,$listID);


?>
