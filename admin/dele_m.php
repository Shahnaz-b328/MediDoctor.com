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
			
			if (!isset($_GET['dele_mid']) || $_GET['dele_mid'] == NULL) {
			echo "<script>window.location = 'firstaid_insertM.php';</script>";
			} else {
				$postid = $_GET['dele_mid'];
				
				$query = "select * from firstaidm where id='$postid'";
				$getdata = $db->select($query);
				
				if ($getdata) {
				while ($deleimg = $getdata->fetch_assoc()) {
					$delelink = $deleimg['image'];
					unlink($delelink);
					}
				}
				 $delequery = "delete from firstaidm where id = '$postid'";
				 $deledata = $db->delete($delequery);
				 if ($deledata) {
		echo "<script>alert('Data Deleted Successfully.');</script>";
	   echo "<script>window.location = 'firstaid_insertM.php';</script>";
				 } else {
	echo "<script>alert('Data Not Deleted.');</script>";
	echo "<script>window.location = 'firstaid_insertM.php';</script>";
				 }
			}
			
			?>