
<?php

include_once('C:\xampp\htdocs\LTW1718\php\session.php');
include_once('C:\xampp\htdocs\LTW1718\php\add_task.php');

$current_user = $_SESSION['username'];
$curr_row= getIdFromUser($current_user);
$curr_id= $curr_row['id'];
if(doListsExist("List1",$curr_id)){

}
  else{
    addList("List1",$curr_id);
  }

if(doListsExist("List2",$curr_id)){
}
  else{
    addList("List2",$curr_id);
  }

if(doListsExist("List3",$curr_id)){
}
  else{
    addList("List3",$curr_id);

}
if(doListsExist("List4",$curr_id)){
}else{
    addList("List4",$curr_id);
  }




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
	    						<option value="List1">List 1</option>
	    						<option value ="List2">List 2</option>
	    						<option value="List3">List 3</option>
								</select>
                  </form>
					</div>
				</div>


				<div class="list_container">
					<div class="list_input">
              <form  method="post">
						<input type="text" placeholder="Add Task..." name="tasks">

							<input type="submit" name="submit" value="add" onclick="addTask();">
           </form>
					</div>
					<div class="List1">
						<ul id="List1">

							<h2>List 1</h2>
              <?php


                $list_id= getIdFromList($curr_id,"List1");

                getAllTasks($list_id['id']);

             ?>
						</ul>
					</div>
					<div class="List2">
						<ul id="List2">
							<h2>List 2</h2>
              <?php
              $list_id= getIdFromList($curr_id,"List2");
              getAllTasks($list_id['id']);
              ?>
						</ul>
					</div>
					<div class="List3">
						<ul id="List3">
							<h2>List 3</h2>
              <?php
              $list_id= getIdFromList($curr_id,"List3");
              getAllTasks($list_id['id']);
               ?>
						</ul>
					</div>
					<div class="List4">
						<ul id="List4">
              <?php
              $list_id= getIdFromList($curr_id,"List4");
              getAllTasks($list_id['id']);
               ?>
							<h2>List 4</h2>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
