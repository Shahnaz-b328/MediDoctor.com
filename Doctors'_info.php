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
  <title>Doctors' Info</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="main"  id="home">
    <div class="register-box">
       <ul>  
          <li><a href="../MediDoctor.com/index_2.php">Home</a></li>
          <li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
          <li><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
          <li class="active"><a href="../MediDoctor.com/Doctors'_info.php">Doctors' Info</a></li>
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

           <!--************ light section started ****************-->
           <!--*****************************************************-->



 <section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <h2>Doctor's Information</h2>
      <p></p>
    </div>

<?php
	 $query = "select * from doc";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
    <div class="col-1">
      <div class="text-box">
        <h2><?php echo $result['doc_name'];?></h2>
        <p><?php echo $result['doc_info'];?></p>
      </div>
    </div>
<?php } } ?>    
</section>

</body>
<footer>
  <div class="main">
    <span>Copyright @ 2019<br>
    Design &amp; Developed By Anika & Shahnaz</span>
  </div>


  <div class="arrow">
    <a href="#home">
    <img src="image/arrow.png" alt="up_arrow"></a>
  </div>

</footer>
</html>