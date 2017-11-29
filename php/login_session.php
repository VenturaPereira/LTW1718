<?php


include_once('init.php');
function isLoginCorrect($username, $password) {
   echo $password;
   echo $username;
   global $dbh;
   $stmt = $dbh->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
   $stmt->execute(array($username, sha1($password)));
   return $stmt->fetch() !== false;
 }
 ?>
