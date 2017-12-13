
<?php

include_once('C:\xampp\htdocs\LTW1718\php\session.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$current_user = $_SESSION['username'];
$curr_row= getIdFromUser($current_user);
$curr_id= $curr_row['id'];




?>
<head>


	<script src="http://localhost/LTW1718/js/dropdown_button.js"></script>
	<script src="http://localhost/LTW1718/js/user_menu.js"></script>
	<script src="http://localhost/LTW1718/js/log_out.js"> </script>
	<script src="http://localhost/LTW1718/html/add_task.js"> </script>

	<title>Taskify</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
</head>
<body>
		<div class="profilepage_container">
			<div class="topbar">
				<div class="logo_title">
					<a href="#"><img src="https://image.ibb.co/c4d3aG/logo.png" class="logo"></a>
					<h2>Taskify</h2>
				</div>
				<div class="user_menu_dropdown">
					<a id="menu" class="dropdown_icon"><img src="https://image.ibb.co/fHevub/user.png" class="user_icon"></a>
					<div id="userMenu" class="user_menu">
						<a href="profilepage.php">Preferences</a>
						<a href="logOut.php">Log Out</a>
					</div>
				</div>
			</div>

			<div class="sidenav">
				<
				<div class="add_list">
					<form method="post">
						<input type="text" placeholder="List title..." name="listToAdd" class="add_list_input">
						<input type="submit" class="dropbtn" name="submit" value="Add it" onclick="addList();" >
					</form>
				</div>
			</div>

			<div class="list_container">
				<div class="task_manager">
					<div class="list_dropdown">
						<button onclick="down()" class="list_dropbtn">Choose list...</button>
						<form method="post">
							<select name="myDropdown" id ="myDropdown" class="dropdown" >
								<div id="list_int"> </div>
								<?php
								$row_user = getIdFromUser($_SESSION['username']);
								$id_user = $row_user['id'];
								getOptionLists($id_user);

								?>

							</select>

						</form>
					</div>
					<form  method="post">
						<input type="text" placeholder="Add Task..." name="tasks" class="form_input">

						<input type="submit" class="addBtn" name="submit" value="Add" onclick="addTask();">
					</form>
				</div>

				<?php
				$row = getIdFromUser($_SESSION['username']);
				$id_from_userRow = $row['id'];
				getAllLists($id_from_userRow);
				?>
			</div>
		</div>
</body>
