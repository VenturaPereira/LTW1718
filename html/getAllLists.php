<?php

include_once('../php/init.php');
include_once('../php/add_task.php');

$user_id = getIdFromUser($_SESSION['username']);

$allLists = getOptionListsToAjax($user_id);

foreach ($allLists as $list) {
  echo jscon_encode($list['name']);
}

 ?>
