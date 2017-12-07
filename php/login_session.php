<?php


include_once('init.php');
include_once('add_task.php');
function isLoginCorrect($email, $password) {

   global $dbh;
   $stmt = $dbh->prepare('SELECT * FROM user WHERE email = ? AND password = ?');

    $stmt->execute(array($email, sha1($password)));
   return $stmt->fetch() !== false;
 }

 function setNumberOfLists(){
<<<<<<< HEAD
   $row_user = getIdFromUser($_SESSION['username']);
   $id_user = $row_user['id'];
   if(!isset($_SESSION['lists'])){
     $_SESSION['lists'] = getNumberOfLists($id_user);
=======
   if(!isset($_SESSION['lists'])){
     $_SESSION['lists'] = 0;
>>>>>>> 4fed517ca807e303a972659e7c47971fd9c69286
   }
 }
 ?>
