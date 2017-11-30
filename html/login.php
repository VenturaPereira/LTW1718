
<div class="registerValidation">
<?php
include_once('C:\xampp\htdocs\LTW1718\php\login_session.php');
include_once('C:\xampp\htdocs\LTW1718\php\init.php');

if(isset($_REQUEST['sign_in'])){
if(isset($_REQUEST['check'])){
		$mail= $_POST['email'];
		$password= $_POST['password'];
   if(isLoginCorrect($mail,$password)){
		 setCurrentUser($mail,$password);
		 echo "Success!";
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
				<h1>Taskify</h1>
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

				<input type="submit" name="sign_in" value="Sign in">
			</form>
		</div>

		<center>
			<div class="account_button">
				<a href="register.html">I don't have an account</a>
			</div>
		</center>

	</body>
</html>
