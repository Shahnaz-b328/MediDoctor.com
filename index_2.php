<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home|MediDoctor.com</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="main" id="home">
		<ul>  
      		 <li class="active"><a href="../MediDoctor.com/index_2.php">Home</a></li> 
      		<li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
			<li><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
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
		<div class="slider">
			<div class="title">
			
				<h1>MediDoctor.com</h1>
			</div>
	<!--	<div class="button">
			<a href="../MediDoctor.com/doc_login/register.php" class="btn">Sign Up</a>
			<a href="../MediDoctor.com/doc_login/register.php" class="btn ">Log In</a>
		</div> -->
		</div>
	</header>

<!-- ************************************************************************ -->
<!-- ************************************************************************ -->

<!--*****************************************************************
	******************************************************-->
		<div class="flex-container">
			<div class="flex-items2">
				<h6>It is a long established fact</h6>
				<h3>It is a long established fact</h3>
				<p>It is a long established fact that, finding proper Doctor from home is a big and difficult task for people of our country.That is why, we are here to help people from this kinds of problems.
				</p>
				<a href="../MediDoctor.com/about.php" class="read">About Us</a>
			</div>
			
			<div class="flex-items2">
				<div class="zoom">
					<img src="../MediDoctor.com/image/1.jpg">
				</div>
				<div class="title-line margin-top"></div>
					<div class="para">
						<p class="margin-top-1">Finding Doctors and
						knowing about your fast-aid or about the symptoms 
						of your diseases are no more complicated fact this days.
						We are here to help.You can browse your health problems
						or can about fast-aid of any accident.You can also 
						find the neutrition value of your food here.Come join us. <a href="../MediDoctor.com/doc_login/register.php">.... Register Now</p></a>
					</div>
			</div>
	 	</div>
	 </div>


           <!--************ light section started ****************-->
           <!--*****************************************************-->
<section class="full-light">
  <div class="main">
    <div class="heading">
      <h2>Doctors' Information</h2>
    </div>

    <div class="col-md-2">
      <div class="inner">
        <!-- <img src="../MediDoctor.com/image/8.jpg"> -->
        <a href="../MediDoctor.com/Doctors'_info.php"><h6>Dental Specialist</h6>
        <p>Dental Specialists are not only dentists,they are who recive additional training
          in a specific dental speciality ,above and beyond their general
          dentistry degree.</p>
      </a></div>
    </div>

    <div class="col-md-2">
      <div class="inner">
        <!-- <img src="../MediDoctor.com/image/8.jpg"> -->
        <a href="../MediDoctor.com/Doctors'_info.php"><h6>Pediatric Specialist</h6>
        <p>Pediatricians are doctors who manage the health of your child,
          including physical,behavior and mental health issues.They are trained
          to diagnose and treat from minor to mejor problems</p>
      </a></div>
    </div>

    <div class="col-md-2">
      <div class="inner">
        <!-- <img src="../MediDoctor.com/image/8.jpg"> -->
        <a href="../MediDoctor.com/Doctors'_info.php"><h6>Gynecology and obstractics</h6>
        <p>This is the medical specialty that encompasses the two subspecialties
          of Obstractics pregnancy and
          gynocology female reproductive system.</p>
      </a></div>
    </div>

		    <div class="col-md-2">
      <div class="inner">
        <!-- <img src="../HealthE.com/image/8.jpg"> -->
        <a href="../MediDoctor.com/Doctors'_info.php"><h6>Medicine Specialist</h6>
        <p>Medicine specialists are doctors who have completed advanced education
          and clinical training in specific area of medicine.It is a branch
           of medical is defined group of
          patients, philosophy.</p>
      </a></div>
    </div>
	</div>
</section>

	<!--***************************************************-->
	 <!--************ who-we-are section ****************-->

<section class="who-we-are">
	<div class="main">
		<div class="heading">
			<a href="../MediDoctor.com/first_aid.php"><h2>First Aid</h2></a>
			<p>First Aid option is here for you.You can browse Your problems here. Check Now! </p>
		</div>

		<div class="col-1">
			<div class="text-box">
				<a href="../MediDoctor.com/fastAid/Firstaid_A.php"><h4>Animal Bites</h4>
				<p>Bites can be caused by wild animals and domastic animals(Including humans),and they can range from mild to serious.</p>
			</a></div>
		</div>

		<div class="col-1">
			<div class="text-box">
				<a href="../MediDoctor.com/fastAid/Firstaid_A.php"><h4>Abdominal Pain of Children</h4>
				<p> Provide clear fluids to sip, such as water, broth, or fruit juice diluted with water. Serve bland foods.</p>
			</a></div>
		</div>

		<div class="col-1">
			<div class="text-box">
				<a href="../MediDoctor.com/fastAid/Firstaid_A.php"><h4>Abdominal Pain</h4>
					<p>The pain is in your lower right abdomen and tender to the touch, and you also have fever or are vomiting. These may be signs of appendicitis.</p>			
				</a></div>
		</div>
	</div>
</section>	

           <!--************ *********************** ****************-->
          <!--************ our portfolio section started ****************-->
<section class="our-portfolio">
	<div class="main">
		<div class="heading">
			<a href="../MediDoctor.com/doc_login/fst_register.php"><h2>Food Facts</h2></a>
			<p></p>
		</div>


		<div class="col-md-3">
      <div class="first-hover">
        <div class="image-box">
          <img src="../MediDoctor.com/image/corn-nutrition-facts.jpg">
        </div>
        <div class="overlay-text">
          <h3><a href="../MediDoctor.com/grains_n_legumes.php">Grains and Legumes</a></h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="first-hover">
        <div class="image-box">
          <img src="../MediDoctor.com/image/raw-honey.jpg">
        </div>
        <div class="overlay-text">
          <h3><a href="../MediDoctor.com/condiments.php">Condiments</a></h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="first-hover">
        <div class="image-box">
          <img src="../MediDoctor.com/image/grass-fed-beef.jpg">
        </div>
        <div class="overlay-text">
          <h3><a href="../MediDoctor.com/meats_n_seafoods.php">Meats and Seafoods</a></h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="first-hover">
        <div class="image-box">
          <img src="../MediDoctor.com/image/coconut-milk-nutrition-facts.jpg">
        </div>
        <div class="overlay-text">
          <h3><a href="../MediDoctor.com/dairy_n_alternatives.php">Dairy/Dairy Alternatives</a></h3>
        </div>
      </div>
    </div>

	</div>
</section>

<!--*****************************************************************
	**************************************************************-->
       

<section class="dictionary">
	<div class="heading">
		<h2>Disease Dictionary</h2>
	</div>

<div class="dis-btn">
	<a href="../MediDoctor.com/disease.php" class="btn">a</a>
	<a href="../MediDoctor.com/disease.php" class="btn">b</a>
	<a href="../MediDoctor.com/disease.php" class="btn">c</a>
	<a href="../MediDoctor.com/disease.php" class="btn">d</a>
	<a href="../MediDoctor.com/disease.php" class="btn">e</a>
	<a href="../MediDoctor.com/disease.php" class="btn">f</a>
	<a href="../MediDoctor.com/disease.php" class="btn">g</a>
	<a href="../MediDoctor.com/disease.php" class="btn">h</a>
	<a href="../MediDoctor.com/disease.php" class="btn">i</a>
	<a href="../MediDoctor.com/disease.php" class="btn">j</a>
	<a href="../MediDoctor.com/disease.php" class="btn">k</a>
	<a href="../MediDoctor.com/disease.php" class="btn">l</a>
	<a href="../MediDoctor.com/disease.php" class="btn">m</a>
	</div>
</section>
<section class="dictionary">
<div class="dis-btn">
	<a href="../MediDoctor.com/disease.php" class="btn">n</a>
	<a href="../MediDoctor.com/disease.php" class="btn">o</a>
	<a href="../MediDoctor.com/disease.php" class="btn">p</a>
	<a href="../MediDoctor.com/disease.php" class="btn">q</a>
	<a href="../MediDoctor.com/disease.php" class="btn">r</a>
	<a href="../MediDoctor.com/disease.php" class="btn">s</a>
	<a href="../MediDoctor.com/disease.php" class="btn">t</a>
	<a href="../MediDoctor.com/disease.php" class="btn">u</a>
	<a href="../MediDoctor.com/disease.php" class="btn">v</a>
	<a href="../MediDoctor.com/disease.php" class="btn">w</a>
	<a href="../MediDoctor.com/disease.php" class="btn">x</a>
	<a href="../MediDoctor.com/disease.php" class="btn">y</a>
	<a href="../MediDoctor.com/disease.php" class="btn">z</a>
</div>
</section>       
		<!--***********************************************************-->
		<!--*************** Sec bgimg started ******************-->

<section class="sec-bgimg">
	<div class="main">
		<div class="text-box-2">
			<h2>Go visit our Video Corner</h2>
			<h5>Video Corner is For you If you are Finding the solution for
				your health problems and videos can help you through.So Go and check
				this out. </h5>
			<a href="../MediDoctor.com/video_cornenr.php">MORE DETAIL</a>
		</div>

		<div class="img-box">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/xROHiIEsCyU" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in
			-picture" allowfullscreen></iframe>
		</div>
	</div>
</section>



<!--****************************************************************************
	***********************************************************************-->
<section class="who-we-are our-blog">
	<div class="main">
		<div class="heading">
			<<a href="../MediDoctor.com/blog.php"><h2>OUR BLOG</h2></a>
			<p></p>
		</div>

		<div class="col-1">
			<img src="../MediDoctor.com/image/blog/A (5).jpg">
			<div class="text-box">
			<a href="../MediDoctor.com/blog/D1.php">
			<h4>I Gave Up Sugar For 15 Days And It Was Terrible!</h4>
       		<P>How much sugar did I consume per day? Honestly, not much except for a small slice of black forest cake with a cup of camomile tea around 3 pm. </P>
			</a></div>
		</div>

		<div class="col-1">
		<img src="../MediDoctor.com/image/blog/A (25).jpg" ></img>
         <div class="text-box">
        	<a href="../MediDoctor.com/blog/D2.php"><h4>5 Satvik Food Items That You Must Store In Your Kitchen</h4>
        	<P>According to Ayurveda, such a diet provides great nourishment to the body and also maintains a peaceful state of mind.</P>
      		</a></div>
    	</div>

		<div class="col-1">
      <img src="../MediDoctor.com/image/blog/A (8).jpg" ></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/D13.php"><h4>The Psychological Effects of the Keto Diet </h4>
        <P>Popular as a diet that supports good overall health while being effective for weight-loss, Keto has become the number one dieting choice all over the world.</P>
      </a></div>
    </div>
    
	</div>
</section>

<!-- *********************************************************************
*************************************************************************** -->
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


