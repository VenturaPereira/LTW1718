<?php
include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$password = $_POST['password'];

$email = $_SESSION['username'];
$user_row = getAllFromUser($email);

if(sha1($password) == $user_row['password']){
  echo json_encode("no");
}else {
  echo json_encode("yes");
}

 ?>
