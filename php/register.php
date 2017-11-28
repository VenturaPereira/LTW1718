<?php

require_once 'test.php';
$exists = false;
$name= $_POST[""];
$password= $_POST[""];
$email = $_POST[""];
//abrir db
$dbh = new PDO('sqlite:test.db');
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $dbh->prepare("SELECT* FROM user ORDER BY id");
$stmt-> execute();
$result= $stmt->fetchAll();


fr($i=0; $i < count($result); $i++){
  if($result[$i][3] == $email)
    $exists = true;
    echo "Client already exsists";
    break;
}


if(!$exists){

//insert statements
$sqlToInsert='INSERT INTO user (id,name,password,email) VALUES(:id, :name, :password,:email)';
$stmt=$dbh->prepare($sqlToInsert);
//bbinding variables
$stmt->bindParam(':id',$resulte[count($result)][0]+1);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':email',$email);
// execute statement
$stmt->execute();


}
?>
