<?php 
 include '../includes/Session.php';
 Session::checkSession();
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
		
                        <?php

                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                        Session::destroy();
                    }

                        ?>
				
            <div id="main_1">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li class="active"><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				   <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>  			
			<div class="heading">
			 <h2>FirstAid</h2>
			 </div>
		<div class="box">
			<h2><a href="FirstaidA.php">A</a></h2>
		</div>	
			
		<div class="box">
			<h2><a href="FirstaidB.php">B</a></h2>
		</div>
			
		<div class="box">
			<h2><a href="FirstaidC.php">C</a></h2>
		</div>
	   <div class="box">
			<h2><a href="FirstaidD.php">D</a></h2>
		</div>
	   <div class="box">
			<h2><a href="FirstaidE.php">E</a></h2>
		</div>	
		 <div class="box">
			<h2><a href="FirstaidF.php">F</a></h2>
		</div>	
		 <div class="box">
			<h2><a href="FirstaidG.php">G</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidH.php">H</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidI.php">I</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidJ.php">J</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidK.php">K</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidL.php">L</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidM.php">M</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidN.php">N</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidO.php">O</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidP.php">P</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidQ.php">Q</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidR.php">R</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidS.php">S</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidT.php">T</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidU.php">U</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidV.php">V</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidW.php">W</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidX.php">X</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidY.php">Y</a></h2>
		</div>	
		<div class="box">
			<h2><a href="FirstaidZ.php">Z</a></h2>
		</div>	
		
		</div>
</body>
</html>