<?php
include_once('../php/init.php');
include_once('../php/add_task.php');

$newmail= $_POST['mail'];
$password= $_POST['pwd'];
updateUser($_SESSION['username'], $newmail, $password);
$_SESSION['username'] = $newmail;
 ?>
