<?php
include_once('../php/init.php');
include_once('../php/add_task.php');

$salt = "forcaporto258";
$password = $_POST['password'].$salt;

$email = $_SESSION['username'];
$user_row = getAllFromUser($email);

if(sha1($password) == $user_row['password']){
  echo json_encode("no");
}else {
  echo json_encode("yes");
}

 ?>
