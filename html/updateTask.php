<?php


include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');
include_once('C:\xampp\htdocs\LTW1718\php\init.php');

$task_id= $_POST['task_value'];
$list_id = $_POST['list_id'];
echo $task_value;
echo $list_id;
<<<<<<< HEAD

updateTasks($task_id);


=======
//$task= getTask($task_value, $list_id);

updateTasks($task_id);
>>>>>>> 4fed517ca807e303a972659e7c47971fd9c69286
?>
