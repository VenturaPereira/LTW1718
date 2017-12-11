<?php


include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
include_once('C:\xampp\htdocs\LTW1718\php\init.php');

$task_id= $_POST['task_value'];
$list_id = $_POST['list_id'];


updateTasks($task_id);

echo json_encode($task_id);

?>
