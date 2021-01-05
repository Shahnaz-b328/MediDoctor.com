<?php include 'config/config.php'; ?>
<?php include 'includes/Database.php'; ?>
<?php
  $db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Fruits</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="main">
    <div class="register-box">
      <ul>  
      <li><a href="../index.php">Home</a></li>
      <li class="active"><a href="../food_fact/food_facts.php">Food Facts</a></li>
      <li><a href="../disease.php">Disease Dictionary</a></li>
      <li><a href="../Doctors'_info.php">Doctors' Info</a></li>
      <li><a href="../first_aid.php">Hospitals</a></li>
      <li><a href="../first_aid.php">First Aid</a></li>
      <li><a href="../video_corner.php">Video Corner</a></li>
      <li><a href="../chatbot.php">Chat Bot</a></li>
      <li><a href="../blog.php">Our Blog</a></li>
      <li><a href="../doc_login/register.php">Registration</a></li>
      </ul>

        

    </div>
   </div>
   </header> 
   <!--*****************************************************************
  ******************************************************-->  
 <section class="content">
 <?php
	 $query = "select * from fruits";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
 <p><?php echo $result['fruit_desc'];?></p>
 <?php } } ?> 
 </section>
</body>
</html>