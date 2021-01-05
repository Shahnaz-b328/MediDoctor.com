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
				
            <div id="main_11">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				   <li><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
				
				<table id="insert">
			<tr>
				<th>Id</th>
				<th>Grains and Legumes Name</th>
				<th>Image</th>
				<th>Grains and Legumes Description</th>
				<th>Action</th>
			</tr>
				<?php 
				$query = "select * from grains order by id";
				$insert = $db->select($query);
				if($insert) {
				$i=0;
				while ($result = $insert->fetch_assoc()) {
				$i++;
				?>
				
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['g_name']; ?></td>
				<td><img src="<?php echo $result['image']; ?>" height="100px" width="200px"/></td>
				<td><?php echo $fm->textShorten($result['g_desc']); ?></td>
				<td>
				<a href="grains_edit.php?grains_editid=<?php echo $result['id']; ?>">Edit</a> 
					|| 
				<a onclick="return confirm('Are you sure to Delete')" href="grains_dele.php?grains_deleid=<?php echo $result['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php }} ?>
				</table>
				</div>
				
	
</body>
</html>