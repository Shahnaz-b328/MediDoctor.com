<?php 
 include '../includes/Session.php';
 Session::checkSession();
?>
<?php include '../config/config.php'; ?>
<?php include '../includes/Database.php'; ?>
<?php include '../helper/Format.php'; ?>
<?php
  $db = new Database();
  $fm = new Format();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	
	<script>
        $(document).ready(function () {
            setupLeftMenu();
        setSidebarHeight();
        });
</script>
</head>
<body>
<header>
		
                        <?php

                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                        Session::destroy();
                    }

                        ?>
				
            <div id="main">
			<nav>
                <ul>
				<li class="active"><a href="index.php">Dashboard</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				    <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
			  </div>
	  
		<div class="card">
		<h2> Categories </h2>
		<img src="image/food.jpg"  height="300px" width="300px">
		<button class="btn0"><a href="foodfacts.php">Food Facts</a></button>
		
		<img src="image/medical.jpg"  height="300px" width="300px">
		<button class="btn1"><a href="firstaid.php">FirstAid</a></button>
		
		<img src="image/Health.png"  height="300px" width="300px">
		<button class="btn2"><a href="disease.php">Disease</a></button>
		
		<img src="image/medical-background.jpg"  height="300px" width="300px">
		<button class="btn3"><a href="doctor.php">Doctor's Info</a></button>
		</div>
		</header>

   </body>
   </html>