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
				
            <div id="main_2">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li class="active"><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				   <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
				<div class="diseaseh">
			 <h2>Disease</h2>
			 </div>
			 
			 <div class="container">
				
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$disease_name = mysqli_real_escape_string($db->link, $_POST['disease_name']);
		$disease_desc = mysqli_real_escape_string($db->link, $_POST['disease_desc']);
	
		
		if ($disease_name == "" || $disease_desc == "") {
		echo "<span class='error'>Field Must Not be Empty !</span>";
		
		} 
		
			$query = "INSERT INTO disease(disease_name, disease_desc) VALUES('$disease_name', '$disease_desc')";
			
			$inserted_rows = $db->insert($query);
			if ($inserted_rows) {
			echo "<span class='success'>Data Inserted Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Inserted!</span>";
			}
		
				}
				 
		?>     
			<button class="but success"><a href="disease_insert.php">Inserted Data</a></button>
			<form action="#" method="post" enctype="multipart/form-data">	
			<label>Disease Name</label>
			<input type="text" placeholder="Enter Disease Name" name="disease_name">
			
			<label>Disease Description</label>
                          
              <textarea class="tinymce" name="disease_desc" ></textarea>
			  
			  <input type="submit" name="submit" Value="Save" />  
			  </form>
		</div>
		<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
			 
			 
			  </div>
		
		  
			  

	</header>

</body>
</html>