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
			
			if (!isset($_GET['alzheimer_editid']) || $_GET['alzheimer_editid'] == NULL) {
			echo "<script>window.location = 'alzheimer_insert.php';</script>";
			} else {
				$postid = $_GET['alzheimer_editid'];
				}
			
			?>	
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$alzheimer_name = mysqli_real_escape_string($db->link, $_POST['alzheimer_name']);
		$alzheimer_desc = mysqli_real_escape_string($db->link, $_POST['alzheimer_desc']);
		
		        $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];
		
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "uploadimg/".$unique_image;
		
		if ($alzheimer_name == "" || $alzheimer_desc == "") {
		echo "<span class='error'>Field Must Not be Empty !</span>";
		
		} else {
		if (!empty($file_name)) {
		if ($file_size >1048567) {
		echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
	 
	 } elseif (in_array($file_ext, $permited) === false) {
		echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
		
		} else {
			move_uploaded_file($file_temp, $uploaded_image);
			$query = "UPDATE alzheimer
					  SET
					  alzheimer_name = '$alzheimer_name',
					  alzheimer_desc = '$alzheimer_desc',
					  image = '$uploaded_image'
					   WHERE id = '$postid'";
			
			$updated_rows = $db->update($query);
			if ($updated_rows) {
		echo "<span class='success'>Data Updated Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Updated!</span>";
			}
		}  
	} else {
			$query = "UPDATE alzheimer
					  SET
					  alzheimer_name = '$alzheimer_name',
					  alzheimer_desc = '$alzheimer_desc'
					   WHERE id = '$postid'";
			
			$updated_rows = $db->update($query);
			if ($updated_rows) {
		echo "<span class='success'>Data Updated Successfully.</span>";
			} else {
			 echo "<span class='error'>Data Not Updated!</span>";
			}
		   }
		 }
	 }
				 
		?>    
			<h2>Update</h2>
			<button class="but success"><a href="alzheimer_insert.php">Inserted Data</a></button>
			<form action="#" method="post" enctype="multipart/form-data">	
			<?php 
			
			$query = "select * from alzheimer where id='$postid' order by id";
			$getpost = $db->select($query);
				while ($result = $getpost->fetch_assoc()) {
				
			
			?>
			
			
			<label>Disease Name</label>
			<input type="text" name="alzheimer_name" value="<?php echo $result['alzheimer_name']; ?>">
			
			<label>Image</label>
			<img src="<?php echo $result['image']; ?>" height="100px" width="200px"/><br/>
			<input  type="file" name="image" >
			
			<label>Disease Desc</label>
                          
              <textarea class="tinymce" name="alzheimer_desc" >
			  <?php echo $result['alzheimer_desc']; ?>
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