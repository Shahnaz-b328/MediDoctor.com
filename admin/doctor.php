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
		
                        <?php

                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                        Session::destroy();
                    }

                        ?>
				
            <div id="main_3">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li class="active"><a href="doctor.php">Doctor's Info</a></li>
				   <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
			 
			  
			  <div class="container1">
			  <?php
			  
			  				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$doc_name = mysqli_real_escape_string($db->link, $_POST['doc_name']);					
		$doc_info = mysqli_real_escape_string($db->link, $_POST['doc_info']);
		
			$query = "INSERT INTO doc(doc_name, doc_info) VALUES('$doc_name', '$doc_info')";
			
			$inserted_rows = $db->insert($query);
			if ($inserted_rows) {
			echo "<span class='success'>Data Inserted Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Inserted!</span>";
			}
		
		}
		?>
			  <h2>Doctor's Information</h2>
			<button class="but success"><a href="doctorinfo.php">Doctor's Info</a></button>
			  <form action="#" method="post" enctype="multipart/form-data">
			   <label>Doctor's Name</label>
       <input type="txt"  name="doc_name" placeholder="Doctor's Name">
	   
	   <label>Doctor's Information</label>
       <textarea class="tinymce" name="doc_info" ></textarea>
	   <input type="submit" value="Save">
			  </form>
			  </div>
	<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
			</div>  
	
</body>
</html>