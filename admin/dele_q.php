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
			
			if (!isset($_GET['dele_qid']) || $_GET['dele_qid'] == NULL) {
			echo "<script>window.location = 'firstaid_insertQ.php';</script>";
			} else {
				$postid = $_GET['dele_qid'];
				
				$query = "select * from firstaidq where id='$postid'";
				$getdata = $db->select($query);
				
				if ($getdata) {
				while ($deleimg = $getdata->fetch_assoc()) {
					$delelink = $deleimg['image'];
					unlink($delelink);
					}
				}
				 $delequery = "delete from firstaidq where id = '$postid'";
				 $deledata = $db->delete($delequery);
				 if ($deledata) {
		echo "<script>alert('Data Deleted Successfully.');</script>";
	   echo "<script>window.location = 'firstaid_insertQ.php';</script>";
				 } else {
	echo "<script>alert('Data Not Deleted.');</script>";
	echo "<script>window.location = 'firstaid_insertQ.php';</script>";
				 }
			}
			
			?>