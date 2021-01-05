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
				
            <div id="mainuser">
			<nav>
                <ul>
				<li><a href="index.php">Dashborad</a></li>
				  <li><a href="foodfacts.php">Food Facts</a></li>
				  <li><a href="firstaid.php">FirstAid</a></li>
				  <li><a href="disease.php">Disease</a></li>
				  <li><a href="doctor.php">Doctor's Info</a></li>
				  <li class="active"><a href="user.php">User</a></li>
				  <li><a href="?action=logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
				</ul>
				</nav>
				
				<table id="user">
			<tr>
				<th>Id</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
				<?php 
				$query = "select * from users order by id";
				$insert = $db->select($query);
				if($insert) {
				$i=0;
				while ($result = $insert->fetch_assoc()) {
				$i++;
				?>
				
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['username']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td><?php echo $result['password']; ?></td>
			</tr>
			<?php }} ?>
				</table>
				</div>
				
	
</body>
</html>