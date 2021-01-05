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
  <title>First Aid</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <div class="main"  id="home">
    <div class="register-box">
      <ul>  
          <li><a href="../MediDoctor.com/index_2.php">Home</a></li>
          <li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
          <li><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
          <li><a href="../MediDoctor.com/Doctors'_info.php">Doctors' Info</a></li>
          <li><a href="../MediDoctor.com/hospital_list.php">Hospitals</a></li>
          <li class="active"><a href="../MediDoctor.com/first_aid.php">First Aid</a></li>
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

<section class="dictionary">
	<div class="heading">
		<h2>First Aid A-Z</h2>
	</div>

<div class="dis-btn">
	<a href="#afirst" class="btn">a</a>
	<a href="#bfirst" class="btn">b</a>
	<a href="#cfirst" class="btn">c</a>
	<a href="#dfirst" class="btn">d</a>
	<a href="#efirst" class="btn">e</a>
	<a href="#ffirst" class="btn">f</a>
	<a href="#gfirst" class="btn">g</a>
	<a href="#hfirst" class="btn">h</a>
	<a href="#ifirst" class="btn">i</a>
	<a href="#jfirst" class="btn">j</a>
	<a href="#kfirst" class="btn">k</a>
	<a href="#lfirst" class="btn">l</a>
	<a href="#mfirst" class="btn">m</a>
	</div>
</section>
<section class="dictionary">
<div class="dis-btn">
	<a href="#nfirst" class="btn">n</a>
	<a href="#ofirst" class="btn">o</a>
	<a href="#pfirst" class="btn">p</a>
	<a href="#qfirst" class="btn">q</a>
	<a href="#rfirst" class="btn">r</a>
	<a href="#sfirst" class="btn">s</a>
	<a href="#tfirst" class="btn">t</a>
	<a href="#ufirst" class="btn">u</a>
	<a href="#vfirst" class="btn">v</a>
	<a href="#wfirst" class="btn">w</a>
	<a href="#xfirst" class="btn">x</a>
	<a href="#yfirst" class="btn">y</a>
	<a href="#zfirst" class="btn">z</a>
</div>
</section>

<!--*****************************************************************
  ******************************************************-->
<section class="list" id="afirst"> 
  <h3>A</h3>
  <ul>
		<?php
	 $query = "select * from firstaida";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
		
      <li><a href="../MediDoctor.com/fastAid/Firstaid_A.php?id=<?php echo $result['id']; ?>"><?php echo $result['a_name'];?></li></a>
     <?php } } ?> 
</ul> 
</section>

<section class="list" id="bfirst"> 
  <h3>B</h3>
  <ul>
<?php
	 $query = "select * from firstaidb";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
		
      <li><a href="../MediDoctor.com/fastAid/Firstaid_B.php?id=<?php echo $result['id']; ?>"><?php echo $result['b_name'];?></li></a>
     <?php } } ?> 
</ul> 
</section>

<section class="list" id="cfirst"> 
  <h3>C</h3>
  <ul>
  <?php
	 $query = "select * from firstaidc";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_C.php?id=<?php echo $result['id']; ?>"><?php echo $result['c_name'];?></li></a>
      <?php } } ?> 
</ul> 
</section>

<section class="list" id="dfirst"> 
  <h3>D</h3>
  <ul>
  <?php
	 $query = "select * from firstaidd";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidD.php?id=<?php echo $result['id']; ?>"><?php echo $result['d_name'];?></li></a>
	  <?php } } ?>
      
</ul> 
</section>

<section class="list" id="efirst"> 
  <h3>E</h3>
  <ul>
    <?php
	 $query = "select * from firstaide";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidE.php?id=<?php echo $result['id']; ?>"><?php echo $result['e_name'];?></li></a>
	  <?php } } ?> 
</ul> 
</section>

<section class="list" id="ffirst"> 
  <h3>F</h3>
  <ul>
    <?php
	 $query = "select * from firstaidf";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_F.php?id=<?php echo $result['id']; ?>"><?php echo $result['f_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>

<section class="list" id="gfirst"> 
  <h3>G</h3>
  <ul>
 <?php
	 $query = "select * from firstaidg";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidG.php?id=<?php echo $result['id']; ?>"><?php echo $result['g_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>

<section class="list" id="hfirst"> 
  <h3>H</h3>
  <ul>
    <?php
	 $query = "select * from firstaidh";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidH.php?id=<?php echo $result['id']; ?>"><?php echo $result['h_name'];?></li></a>
	  <?php } } ?>   
</ul> 
</section>

<section class="list" id="ifirst"> 
  <h3>I</h3>
  <ul>
    <?php
	 $query = "select * from firstaidi";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidI.php?id=<?php echo $result['id']; ?>"><?php echo $result['i_name'];?></li></a>
	  <?php } } ?>   
</ul> 
</section>

<section class="list" id="jfirst"> 
  <h3>J</h3>
  <ul>
    <?php
	 $query = "select * from firstaidj";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidJ.php?id=<?php echo $result['id']; ?>"><?php echo $result['j_name'];?></li></a>
	  <?php } } ?>     
</ul> 
</section>



<!-- <section class="list" id="kfirst"> 
  <h3>K</h3>
  <ul>
    <?php
	 $query = "select * from firstaidk";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_K.php?id=<?php echo $result['id']; ?>"><?php echo $result['k_name'];?></li></a>
	  <?php } } ?>     
</ul> 
</section>


<section class="list" id="lfirst"> 
  <h3>L</h3>
  <ul>
    <?php
	 $query = "select * from firstaidl";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_L.php?id=<?php echo $result['id']; ?>"><?php echo $result['l_name'];?></li></a>
	  <?php } } ?>     
</ul> 
</section> -->



<section class="list" id="mfirst"> 
  <h3>M</h3>
  <ul>
    <?php
	 $query = "select * from firstaidm";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidM.php?id=<?php echo $result['id']; ?>"><?php echo $result['m_name'];?></li></a>
	  <?php } } ?>   
</ul> 
</section>

<section class="list" id="nfirst"> 
  <h3>N</h3>
  <ul>
     <?php
	 $query = "select * from firstaidn";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidN.php?id=<?php echo $result['id']; ?>"><?php echo $result['n_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>



<section class="list" id="ofirst"> 
  <h3>O</h3>
  <ul>
     <?php
	 $query = "select * from firstaido";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_O.php?id=<?php echo $result['id']; ?>"><?php echo $result['o_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>


<section class="list" id="pfirst"> 
  <h3>P</h3>
  <ul>
     <?php
	 $query = "select * from firstaidp";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_P.php?id=<?php echo $result['id']; ?>"><?php echo $result['p_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>


<!-- <section class="list" id="qfirst"> 
  <h3>Q</h3>
  <ul>
     <?php
	 $query = "select * from firstaidq";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_Q.php?id=<?php echo $result['id']; ?>"><?php echo $result['q_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section> -->



<section class="list" id="rfirst"> 
  <h3>R</h3>
  <ul>
     <?php
	 $query = "select * from firstaidr";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_R.php?id=<?php echo $result['id']; ?>"><?php echo $result['r_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>




<section class="list" id="sfirst"> 
  <h3>S</h3>
  <ul>
     <?php
	 $query = "select * from firstaids";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidS.php?id=<?php echo $result['id']; ?>"><?php echo $result['s_name'];?></li></a>
	  <?php } } ?>    
</ul> 
</section>

<section class="list" id="tfirst"> 
  <h3>T</h3>
  <ul>
<?php
	 $query = "select * from firstaidt";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidT.php?id=<?php echo $result['id']; ?>"><?php echo $result['t_name'];?></li></a>
	  <?php } } ?>    
</ul> 
</section>

<section class="list" id="ufirst"> 
  <h3>U</h3>
  <ul>
      <?php
	 $query = "select * from firstaidu";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidU.php?id=<?php echo $result['id']; ?>"><?php echo $result['u_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>


<!-- <section class="list" id="vfirst"> 
  <h3>V</h3>
  <ul>
     <?php
	 $query = "select * from firstaidv";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_V.php?id=<?php echo $result['id']; ?>"><?php echo $result['v_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section> -->



<section class="list" id="wfirst"> 
  <h3>W</h3>
  <ul>
   <?php
	 $query = "select * from firstaidw";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/FirstaidW.php?id=<?php echo $result['id']; ?>"><?php echo $result['w_name'];?></li></a>
	  <?php } } ?>    
</ul> 
</section>



<!-- <section class="list" id="xfirst"> 
  <h3>X</h3>
  <ul>
     <?php
	 $query = "select * from firstaidx";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_X.php?id=<?php echo $result['id']; ?>"><?php echo $result['x_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>


<section class="list" id="yfirst"> 
  <h3>Y</h3>
  <ul>
     <?php
	 $query = "select * from firstaidy";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_Y.php?id=<?php echo $result['id']; ?>"><?php echo $result['y_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section>


<section class="list" id="zfirst"> 
  <h3>Z</h3>
  <ul>
     <?php
	 $query = "select * from firstaidz";
	 $post = $db->select($query);
		if ($post) {
			while ($result = $post->fetch_assoc()) {
		?>
      <li><a href="../MediDoctor.com/fastAid/Firstaid_Z.php?id=<?php echo $result['id']; ?>"><?php echo $result['z_name'];?></li></a>
	  <?php } } ?>  
</ul> 
</section> -->




<!--*****************************************************************
  ******************************************************-->

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