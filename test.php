<?php

namespace App;

class SQLiteInsert{

	private $pdo;



	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public insertStuff($id, $name, $password, $email){

		$sqlToInsert='INSERT INTO user (id,name,password,email) VALUES(:id, :name, :password,:email)';
		$stmt=this->pdo->prepare($sqlToInsert);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':email',$email);

		$stmt->execute();


	}

}

?>