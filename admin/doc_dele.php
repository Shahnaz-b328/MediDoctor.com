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
			
			if (!isset($_GET['doc_deleid']) || $_GET['doc_deleid'] == NULL) {
			echo "<script>window.location = 'doctorinfo.php';</script>";
			} else {
				$postid = $_GET['doc_deleid'];
				
				$query = "select * from doc where id='$postid'";
				$getdata = $db->select($query);
				
				
				 $delequery = "delete from doc where id = '$postid'";
				 $deledata = $db->delete($delequery);
				 if ($deledata) {
		echo "<script>alert('Data Deleted Successfully.');</script>";
	   echo "<script>window.location = 'doctorinfo.php';</script>";
				 } else {
	echo "<script>alert('Data Not Deleted.');</script>";
	echo "<script>window.location = 'doctorinfo_insert.php';</script>";
				 }
			}
			
			?>