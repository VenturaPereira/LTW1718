<?php

include_once('C:\xampp\htdocs\LTW1718\php\init.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$user_id = getIdFromUser($_SESSION['username']);

$allLists = getOptionListsToAjax($user_id);

foreach ($allLists as $list) {
  echo jscon_encode($list['name']);
}

 ?>
