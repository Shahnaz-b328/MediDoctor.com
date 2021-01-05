<?php 
 include '../includes/Session.php';
 Session::checkSession();
?>
<?php include '../config/config.php'; ?>
<?php include '../includes/Database.php'; ?>
<?php include '../helper/Format.php'; ?>
<?php
  $db = new Database();
?>
			<?php 
			
			if (!isset($_GET['dele_diseaseid']) || $_GET['dele_diseaseid'] == NULL) {
			echo "<script>window.location = 'disease_insert.php';</script>";
			} else {
				$postid = $_GET['dele_diseaseid'];
				
				$query = "select * from disease where id='$postid'";
				$getdata = $db->select($query);
				
				
				 $delequery = "delete from disease where id = '$postid'";
				 $deledata = $db->delete($delequery);
				 if ($deledata) {
		echo "<script>alert('Data Deleted Successfully.');</script>";
	   echo "<script>window.location = 'disease_insert.php';</script>";
				 } else {
	echo "<script>alert('Data Not Deleted.');</script>";
	echo "<script>window.location = 'disease_insert.php';</script>";
				 }
			}
			
			?>