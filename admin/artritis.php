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
				
            <div id="main_1">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li class="active"><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
		<div class="container">
				
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$artritis_name = mysqli_real_escape_string($db->link, $_POST['artritis_name']);
		$artritis_desc = mysqli_real_escape_string($db->link, $_POST['artritis_desc']);
		
		        $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];
		
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "uploadimg/".$unique_image;
		
		if ($artritis_name == "" || $artritis_desc == "") {
		echo "<span class='error'>Field Must Not be Empty !</span>";
		
		} elseif ($file_size >1048567) {
		echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
	 
	 } elseif (in_array($file_ext, $permited) === false) {
		echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
		
		} else {
			move_uploaded_file($file_temp, $uploaded_image);
			$query = "INSERT INTO artritis(artritis_name, artritis_desc, image) VALUES('$artritis_name', '$artritis_desc', '$uploaded_image')";
			
			$inserted_rows = $db->insert($query);
			if ($inserted_rows) {
			echo "<span class='success'>Data Inserted Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Inserted!</span>";
			}
		}
				}
				 
		?>     
			<h2>Disease</h2>
			<button class="but success"><a href="artritis_insert.php">Inserted Data</a></button>
			<form action="#" method="post" enctype="multipart/form-data">	
			<label>Disease Name</label>
			<input type="text" placeholder="Enter Disease Name" name="artritis_name">
			
			<label>Image</label>
			<input  type="file" name="image" >
			
			<label>Disease Desc</label>
                          
              <textarea class="tinymce" name="artritis_desc" ></textarea>
			  
			  <input type="submit" name="submit" Value="Save" />  
			  </form>
		</div>
		<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
		</div>
		</body>
		</html>
		