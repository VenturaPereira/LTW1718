<?php
include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$newmail= $_POST['mail'];
$password= $_POST['pwd'];
updateUser($_SESSION['username'], $newmail, $password);
$_SESSION['username'] = $newmail;
 ?>
