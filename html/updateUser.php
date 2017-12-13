<?php
include_once('../php/init.php');
include_once('../php/add_task.php');

$salt = "forcaporto258";
$newmail= $_POST['mail'];
$password= $_POST['pwd'].$salt;
updateUser($_SESSION['username'], $newmail, $password);
$_SESSION['username'] = $newmail;
 ?>
