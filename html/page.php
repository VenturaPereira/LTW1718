
<?php

include_once('C:\xampp\htdocs\LTW1718\php\session.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$current_user = $_SESSION['username'];
$curr_row= getIdFromUser($current_user);
$curr_id= $curr_row['id'];




?>
<head>


	<script src="http://localhost/LTW1718/js/dropdown_button.js"></script>
	<script src="http://localhost/LTW1718/js/log_out.js"> </script>
	<script src="http://localhost/LTW1718/html/add_task.js"> </script>

	<title>Taskify</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
</head>
<body>
	<div class="bg">
		<div class="profilepage_container">

			<div class="topbar">
				<h2>Taskify</h2>
				<a id="menu" onclick="toggleMenu();"><img src="https://image.ibb.co/fHevub/user.png"></a>
				<ul id="menu_box" style="display: block">
					<li><a href="logOut.php">Log Out</a></li>
				</ul>
			</div>

			<div class="sidenav">
				<div class="list_dropdown">
					<button onclick="down()" class="dropbtn">Choose list...</button>
					<form method="post">
						<select name="myDropdown" id ="myDropdown" class="dropdown" >
							<?php
							$row_user = getIdFromUser($_SESSION['username']);
							$id_user = $row_user['id'];
							getOptionLists($id_user);
							 ?>
						</select>

					</form>
				</div>
				<div class="add_list">
					<form method="post">
					<input type="text" placeholder="List title..." name="listToAdd">
					<input type="submit" class="dropbtn" name="submit" value="Add it" onclick="addList();" >
				</form>
				</div>
			</div>


			<div class="list_container">
				<form  method="post">
					<input type="text" placeholder="Add Task..." name="tasks" class="form_input">

					<input type="submit" class="addBtn" name="submit" value="Add" onclick="addTask();">
				</form>
<<<<<<< HEAD

				<?php
				$row = getIdFromUser($_SESSION['username']);
				$id_from_userRow = $row['id'];
				getAllLists($id_from_userRow);
				 ?>
=======

				<?php
				$row = getIdFromUser($_SESSION['username']);
				$id_from_userRow = $row['id'];
				getAllLists($id_from_userRow);


				 ?>
<!--
				<div class="List1">
					<ul id="List1">

						<h2>List 1</h2>

					</ul>
				</div>
				<div class="List2">
					<ul id="List2">
						<h2>List 2</h2>
					</ul>
				</div>
				<div class="List3">
					<ul id="List3">
						<h2>List 3</h2>
					</ul>
				</div>
				<div class="List4">
					<ul id="List4">
						<h2>List 4</h2>
					</ul>
				</div>
			-->
>>>>>>> 4fed517ca807e303a972659e7c47971fd9c69286
			</div>
		</div>
	</div>
</body>
