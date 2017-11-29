<div class="registerValidation">
<?php
if(isset($_REQUEST['submit'])){
if(isset($_REQUEST['check'])){

$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$password= $_POST['password'];
$email = $_POST['email'];
$name = $firstName . $lastName;
$confirmPassword= $_POST['confirmPassword'];


//abrir db

$dbh = new PDO('sqlite:taskify.db');
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//wi

if($confirmPassword == $password){
	try{
//insert statements
$sqlToInsert='INSERT INTO user (name,password,email) VALUES(:name, :password,:email)';
$stmt=$dbh->prepare($sqlToInsert);
//bbinding variables

$stmt->bindParam(':name',$name);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':email',$email);
// execute statement
$stmt->execute();
} catch (PDOException $e){
	$result=  $e->getCode();
	if($result == 23000){
		echo "Email already taken! Please try again!";
	}
	}

}else {
	echo "\n \n \n \nPasswords don't match!";
}
}
}

?>
</div>
	<head>
		<title>Taskify</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
	</head>
	<body>
		<div class="mainpage_text">
			<center>
				<h1>Taskify</h1>
			</center>

			<center>
				<h2>The anti procrastination tool of the internet</h2>
			</center>
		</div>
		<div class="container_register">
			<form action="register.php?check" method="post">
				<div class="form_input">
					<input type="text" placeholder="FirstName" name="firstName">
				</div>

				<div class="form_input">
					<input type="text" placeholder="LastName"
					name="lastName">
				</div>

				<div class="form_input">
					<input type="email" placeholder="Email"
					name="email">
				</div>

				<div class="form_input">
					<input type="password" placeholder="Password"
					name="password">
				</div>

				<div class="form_input">
					<input type="password" placeholder="Confirm Password"
					name="confirmPassword">
				</div>

				<input type="submit" name="submit" value="submit">
			</form>
		</div>
		<center>
			<div class="account_button">
					<a href="login.html">I already have an account</a>
			</div>
		</center>
	</body>
