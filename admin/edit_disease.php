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
			
			if (!isset($_GET['edit_diseaseid']) || $_GET['edit_diseaseid'] == NULL) {
			echo "<script>window.location = 'disease_insert.php';</script>";
			} else {
				$postid = $_GET['edit_diseaseid'];
				}
			
			?>	
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$disease_name = mysqli_real_escape_string($db->link, $_POST['disease_name']);
		$disease_desc = mysqli_real_escape_string($db->link, $_POST['disease_desc']);
		
		if ($disease_name == "" || $disease_desc == "") {
		echo "<span class='error'>Field Must Not be Empty !</span>";
		
		} 
			$query = "UPDATE disease
					  SET
					  disease_name = '$disease_name',
					  disease_desc = '$disease_desc'
					   WHERE id = '$postid'";
			
			$updated_rows = $db->update($query);
			if ($updated_rows) {
		echo "<span class='success'>Data Updated Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Updated!</span>";
			}
		  
	} 
		 		 
		?>    
			<h2>Update</h2>
			<button class="but success"><a href="disease_insert.php">Inserted Data</a></button>
			<form action="#" method="post" enctype="multipart/form-data">	
			<?php 
			
			$query = "select * from disease where id='$postid' order by id";
			$getpost = $db->select($query);
				while ($result = $getpost->fetch_assoc()) {
				
			
			?>
			
			
			<label>Disease Name</label>
			<input type="text" name="disease_name" value="<?php echo $result['disease_name']; ?>">
		
			
			<label>Disease Desc</label>
                          
              <textarea class="tinymce" name="disease_desc" >
			  <?php echo $result['disease_desc']; ?>
			  </textarea>
			  
			  <input type="submit" name="submit" Value="Save" />  
			  </form>
			  <?php } ?>
		</div>
		<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
		</div>
		</body>
		</html>