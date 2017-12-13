<!DOCTYPE html>
<html>
<head>
	<title>Taskify</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
</head>
<body>
	<div class="profilepage_info">

		<div class="topbar">
			<div class="logo_title">
				<a href="#"><img src="https://image.ibb.co/c4d3aG/logo.png" class="logo"></a>
				<h2>Taskify</h2>
			</div>
			<div class="user_menu_dropdown">
				<a id="menu" class="dropdown_icon"><img src="https://image.ibb.co/fHevub/user.png" class="user_icon"></a>
				<div id="userMenu" class="user_menu">
					<a href="page.php">Back to task page</a>
					<a href="logOut.php">Log Out</a>
				</div>
			</div>
		</div>
	</div>

	<div class="profile_container">
		<div class="back_button_area">
			<a href="page.php" class="backbtn">Back to Task Page &raquo;</a>
		</div>
		<form class="form_info" method="post" onsubmit="return handler();">
			<script src="http://localhost/LTW1718/js/change_profile.js"> </script>
			<input type="email" placeholder="Email" name="email">
			<div id="dont_exist"></div>
			<input type="email" placeholder="New email" name="new_email">
			<input type="password" placeholder="Password" name="password">
			<div id="pw_wrong"></div>
			<input type="password" placeholder="New password" name="new_password">
			<input type="password" placeholder="Confirm new password" name="confim_new_password">
			<div id="match_pw"></div>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>


</body>
</html>
