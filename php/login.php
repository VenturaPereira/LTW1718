<?php


$dbh = new PDO('sqlite:taskify.db');
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function isLoginCorrect($username, $password) {

//  $hashed = password_hash($password,PASSWORD_DEFAULT);
   $stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
   $stmt->execute(array($username, sha1($password)));
   return $stmt->fetch() !== false;
 }
 ?>
