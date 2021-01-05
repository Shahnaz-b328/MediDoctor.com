<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Video Corner</title>
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
          <li><a href="../MediDoctor.com/first_aid.php">First Aid</a></li>
          <li class="active"><a href="../MediDoctor.com/video_corner.php">Video Corner</a></li>
          <li><a href="../MediDoctor.com/chatbot.php">Chat Bot</a></li>
          <li><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li><a href="../MediDoctor.com/login.php?logout='1'">Logout</a></li>
      </ul>

      	

    </div>
   </div>
   </header>
<!-- *************************************************************** -->
<!-- **************************************************************** -->


<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Skin and Hair Problems</h2>
      <h5>Skin and hair are very important part of our body.We often face many kinds of problems with our skin and hair.
        Here we present Some Expert  doctors for Skin care and Hair Problems from Youtube channel Doctorola.com</h5>
      <a href="../MediDoctor.com/Video/skin.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="559" height="360" src="https://www.youtube.com/embed/xjZlUV-o2vA?list=PLFF_oJgNTfjvjR0PimlsMdVXZMc-AL79L" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Diet-Nutrition</h2>
      <h5>Having Perfect diet is more then important for any human being.We should know the basic of our food nutritions.
        Here we present Some Expert Doctors of Diet and nutritions from Youtube channel Doctorola.com</h5>
      <a href="../MediDoctor.com/Video/diet.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="559" height="360" src="https://www.youtube.com/embed/GWNYmqAB46Q?list=PLFF_oJgNTfjt-F_pB5d_YMdvueeftVY0t" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Gynae and Obs Disease</h2>
      <h5>Gynae and Obs </h5>
      <a href="../MediDoctor.com/Video/gynae.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Kidney Disease</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/ kidney.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xROHiIEsCyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Urinary Tract Complication</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/Urinary.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/drVCSws5sRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Cardiovascular Disease</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/cardiovascular.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>


<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Cancer</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/cancer.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xROHiIEsCyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Surgery</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/surgery.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/drVCSws5sRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>ENT Disease</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/ent.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Psycological Disorder</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/psycological.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Bone and Joint Pain</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/Bone.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Diabetes</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/diabetes.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Hormones and Thyroid</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/hormone.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>


<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Liver Disease</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/Liver.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Colon Problems</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/colon.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Child Health</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/Child.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>


<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Lung Disease</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/lung.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Eye Problems</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/eye.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Life Style</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/lifestyle.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Oral and Maxilofacial Problems</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/oral.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Neurological Disorder</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/neurological.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="sec-bgimg">
  <div class="main">
    <div class="text-box-2">
      <h2>Blood Disorders</h2>
      <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
      <a href="../MediDoctor.com/Video/blood.php">MORE DETAIL</a>
    </div>

    <div class="img-box">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44dVtI89Q7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>



</body>
<footer>
  <div class="main">
    <span>Copyright @ 2019<br>
    Design &amp; Developed By Anika</span>
  </div>
</footer>

<div class="arrow">
    <a href="#home">
    <img src="image/arrow.png" alt="up_arrow"></a>
  </div>
</html>