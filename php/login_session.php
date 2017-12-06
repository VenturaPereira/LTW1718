<?php


include_once('init.php');
function isLoginCorrect($email, $password) {

   global $dbh;
   $stmt = $dbh->prepare('SELECT * FROM user WHERE email = ? AND password = ?');

    $stmt->execute(array($email, sha1($password)));
   return $stmt->fetch() !== false;
 }

 function setNumberOfLists(){
   if(!isset($_SESSION['lists'])){
     $_SESSION['lists'] = 0;
   }
 }
 ?>
