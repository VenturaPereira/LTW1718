<?php

$name= $_POST[""];
$password= $_POST[""];
$email = $_POST[""];
$confirmPassword= $_POST[""];
//abrir db
$dbh = new PDO('sqlite:test.db');
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





if($confirmPassword == $password){
//insert statements
$sqlToInsert='INSERT INTO user (id,name,password,email) VALUES(:id, :name, :password,:email)';
$stmt=$dbh->prepare($sqlToInsert);
//bbinding variables

$stmt->bindParam(':name',$name);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':email',$email);
// execute statement
$stmt->execute();

}else {
  echo "Passwords don't match!";
}


?>
