<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<?php include 'config/config.php'; ?>
<?php include 'includes/Database.php'; ?>
<?php include 'helper/Format.php'; ?>
<?php
  $db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Diseases and Conditions Index</title>
  <link rel="stylesheet" type="text/css" href="disease/style.css">
</head>
<body>
   <div class="main" id="home">
    <div class="register-box">
      <ul>  
          <li><a href="../MediDoctor.com/index_2.php">Home</a></li>
          <li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
          <li class="active"><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
          <li><a href="../MediDoctor.com/Doctors'_info.php">Doctors' Info</a></li>
          <li><a href="../MediDoctor.com/hospital_list.php">Hospitals</a></li>
          <li><a href="../MediDoctor.com/first_aid.php">First Aid</a></li>
          <li><a href="../MediDoctor.com/video_corner.php">Video Corner</a></li>
          <li><a href="../MediDoctor.com/chatbot.php">Chat Bot</a></li>
          <li><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li><a href="../MediDoctor.com/login.php?logout='1'">Logout</a></li>
      </ul>

        

    </div>
   </div>
   </header>
<!-- ************************************************************** -->
<!-- ************************************************************** -->

<section class="list_C" > 
  <h2>Common Diseases and Conditions</h2>
  <h3>Browse Health Problems</h3>
</section>

<section class="list_C"> 
  <ul>
      <?php
	 $query = "select * from disease";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
		
      <li><a href="../MediDoctor.com/disease/dis.php?id=<?php echo $result['id']; ?>"><?php echo $result['disease_name'];?></li></a>
     <?php } } ?> 
</ul> 
</section>


<footer>
  <div class="main">
    <span>Copyright @ 2019<br>
    Design &amp; Developed By Anika & Shahnaz</span>
  </div>
</footer>

<div class="arrow">
    <a href="#home">
    <img src="image/arrow.png" alt="up_arrow"></a>
  </div>

</body>
</html>