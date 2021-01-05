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
				
            <div id="main_4">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li class="active"><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				  <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
			  </div>
			<div class="p">
			 <p> Foods Categories </p>	  
			 </div>
		  <div class="boxf">
		  <h2><a href="fruits.php">Fruits</a></h2>
			</div>
		<div class="boxf">
		  <h2><a href="vegetables.php">Vegetables</a></h2>
			</div>	

			<div class="boxf">
		  <h2><a href="herbs.php">Herbs and Spices</a></h2>
			</div>	
			<div class="boxf">
		  <h2><a href="nuts.php">Nuts and Seeds</a></h2>
			</div>	
			<div class="boxf">
		  <h2><a href="grains.php">Grains and Legumes</a></h2>
			</div>	
			<div class="boxf">
		  <h2><a href="condiments.php">Condiments</a></h2>
			</div>	
			<div class="boxf">
		  <h2><a href="meats.php">Meats and Seafoods</a></h2>
			</div>
			<div class="boxf">
		  <h2><a href="dairy.php">Dairy Alternatives</a></h2>
			</div>
			  
	</header>
</body>
</html>