
<div class="registerValidation">

<?php
include_once('../php/login_session.php');
include_once('../php/init.php');

if(isset($_REQUEST['sign_in'])){
if(isset($_REQUEST['check'])){
		$mail= $_POST['email'];
		$password= $_POST['password'];
   if(isLoginCorrect($mail,$password)){
		 setCurrentUser($mail);
		 setNumberOfLists();
		  header('Location: page.php');
	 }else{
		echo "User isn't registered.";
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
				<div class="titleAndLogo">
					<a href="#"><img src="https://image.ibb.co/c4d3aG/logo.png" class="logo"></a>
					<h1>Taskify</h1>
				</div>
			</center>

			<center>
				<h2>The anti procrastination tool of the internet</h2>
			</center>
		</div>

		<div class="container_login">
			<form action= "login.php?check" method="post">
				<div class="form_input">
					<input type="email" placeholder="Email" name="email" required>
				</div>

				<div class="form_input">
					<input type="password" placeholder="Password" name="password" required>
				</div>
				<div class="submit_button">
					<input type="submit" name="sign_in" value="Sign in" >
				</div>

			</form>
			<form action="register.php">
				<div class="submit_button">
					<input type="submit" value="I don't have an account">
				</div>
			</form>
		</div>

	</body>
