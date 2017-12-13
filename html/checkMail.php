<?php
include_once('../php/init.php');
include_once('../php/add_task.php');

$email = $_POST['email'];
if($_SESSION['username'] == $email){
  echo json_encode("yes");
} else {

  echo json_encode("no");
}


 ?>
