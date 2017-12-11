<!DOCTYPE html>
<html>
<head>
	<title>Taskify</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
</head>
<body>
	<div class="profilepage_info">

		<div class="topbar">
			<h2>Taskify</h2>
			<a id="menu" <img src="https://image.ibb.co/fHevub/user.png"></a>
			<ul id="menu_box" style="display: block">
				<li><a href="login.php">Log Out</a></li>
			</ul>
		</div>
	</div>

	<div class="profile_container">
		<form method="post" onsubmit="return handler();">
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
