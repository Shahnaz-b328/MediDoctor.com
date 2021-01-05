<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Our Blog</title>
  <link rel="stylesheet" type="text/css" href="d_information/style.css">
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
          <li><a href="../MediDoctor.com/video_corner.php">Video Corner</a></li>
          <li><a href="../MediDoctor.com/chatbot.php">Chat Bot</a></li>
          <li class="active"><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li><a href="../MediDoctor.com/login.php?logout='1'">Logout</a></li>
      </ul>
 
</div>
 

    </div>
  </header>


<section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <a href="../MediDoctor.com/blog/Diet_for_health.php"><h2>Perfect Diet For Health</h2></a>
      <p>It is the first condition for you,if you want to live a healthy life. You must follow the perfect diet for yourself.</p>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/A (5).jpg" ></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/D1.php"><h4>I Gave Up Sugar For 15 Days And It Was Terrible!</h4>
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
        <a href="../MediDoctor.com/blog/D3.php"><h4>The Psychological Effects of the Keto Diet </h4>
        <P>Popular as a diet that supports good overall health while being effective for weight-loss, Keto has become the number one dieting choice all over the world.</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <a href="../MediDoctor.com/blog/stay_fit.php"><h2>Stay Fit</h2></a>
      <p>You can find all the hospitals of Sylhet with the location and informations about them.</p>
    </div>
    
    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/A (6).jpg"></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/s1.php"><h4>5 Tips for stick to your new year's resolution</h4>
        <P>January 1st is an important date for a lot of people. It’s a fresh start – the first day of a new year – and can be the perfect time to set healthy living goals for the whole family.</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/A1(2).jpeg" ></img>
        <div class="text-box">
        <a href="../MediDoctor.com/blog/s2.php"><h4>6 Steps for a healther you</h4>
        <P>I actually think all the foods listed should be a part of everyone’s diets (whether you’re a runner or not!) They are all super healthy and provide tons of fiber, protein and antioxidants.</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/A2.jpg" ></img>
       <div class="text-box">
        <a href="../MediDoctor.com/blog/s3.php"><h4>How to walk your way to better health</h4>
        <P>Walking is relate to being disciplined about your health and maintaining your overall weight! Walking can be great exercise. You just have to know the tricks to make walking an effective “cardio” activity. </P>
      </a></div>
    </div>
  </div>
</section>

  <section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <a href="../MediDoctor.com/blog/knowing_self.php"><h2>Knowing About Yourself Most</h2></a>
      <p>You can find all the hospitals of Sylhet with the location and informations about them.</p>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2.webp"></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/k1.php"><h4>3 Crucial Life Lessons I have Learnt During This Lockdown Phase</h4>
        <P>If life is the greatest teacher, then during these times I have earned my masters degree.
            Sometimes I feel like I am watching a movie.Life seems like a satire or dark comedy these days and I was never a fan of both the genre</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2(1).webp" ></img>
            <div class="text-box">
        <a href="../MediDoctor.com/blog/k2.php"><h4>Fear and Anxiety In the Time of Crisis — What To Do About It?</h4>
        <P>The world is scary right now but within the chaos and confusion, lies an opportunity.Take a deep breath,Yes, once more.</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2(2).webp" ></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/k3.php"><h4>Can’t Stop Biting Your Nails? Then You May Dermatophagia</h4>
        <P>many people resort to chewing on their nails when thinking of ways to get out of a tricky situationBut, what if you have started to not just bite your nails but also the skin around your nails?</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <a href="../MediDoctor.com/blog/recipies.php"><h2>Recipes You Are Searching For</h2></a>
      <p>You can find all the recipies which are both healthy and testy.</p>
    </div>
    
    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2(3).webp" ></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/r1.php"><h4>High Protein Fried Rice</h4>
        <P>This delicious and satisfying fried rice serves as a perfect dinner or lunch recipe for those looking to eat clean without compromising on taste.There are two kinds of people in the food world; rice or bread lovers. If you prefer to the former then this dish will be wildly successful in your kitchen. Healthy, tasty and full of protein, it is the perfect dish after a heavy workout or when you wish to eat healthy. </P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2(6).webp" ></img>
        <div class="text-box">
        <a href="../MediDoctor.com/blog/r2.php"><h4>Crispy and Delicious Roast Chicken</h4>
        <P>The easy dinner recipe that every home cook should have! This Crispy Roast Chicken with Vegetables looks impressive, tastes amazing, and nobody will ever guess that it only took you 15 minutes to pull together! At this time of year, my mind, body and soul crave the cozy comfort and the familiar smell of a chicken roasting in the oven. There’s just nothing better! </P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/a2(8).webp" ></img>
       <div class="text-box">
        <a href="../MediDoctor.com/blog/r3.php"><h4>Grilled Malai Chicken on Skewers</h4>
        <P>A chicken malai tikka recipe for soft, juicy kababs on skewers that will simply melt in your mouth. Tender pieces of boneless chicken are marinated in a unique blend of yogurt, cream, cheese, papaya and spices and cooked on a grill or oven. Perfect for an outdoor barbecue or luncheon.A balmy summer evening in your backyard. Your most favorite people in the world.</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <a href="../MediDoctor.com/blog/mindfull_products.php"><h2>Mindfull Products</h2></a>
      <p>You can find all the hospitals of Sylhet with the location and informations about them.</p>
    </div>
    
    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/m1.jpg" ></img>
      <div class="text-box">
        <a href="../MediDoctor.com/blog/m1.php"><h4>Is It Time To Switch To A Menstrual Cup?</h4>
        <P>I distinctly remember sitting in a women’s reproductive health class in college (it was an easy elective!) learning for the first time that there was an alternative option to tampons and pads…the menstrual cup. My best friend and I looked at each other and immediately shook our heads. There was NO WAY we would ever be sticking our fingers up there and using a reusable menstrual product.</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/m2.jpg" ></img>
        <div class="text-box">
        <a href="../MediDoctor.com/blog/m2.php"><h4>I Love This Beautiful And Eco-Friendly Yoga Mat!</h4>
        <P>If you love yoga and all things earth-friendly, then this awesome yoga mat will make your practice even more joyful. I have been studying yoga since 2007. And by studying I don’t mean that I just do breathing exercises and attend power yoga classes, but I try to adopt the whole yogic lifestyle: eating healthy, meditation and following a strict mental diet.</P>
      </a></div>
    </div>

    <div class="col-1">
      <img src="../MediDoctor.com/image/blog/blog1.png" ></img>
       <div class="text-box">
        <a href="../MediDoctor.com/blog/m3.php"><h4>Love To Travel? Then You Need To Invest In These 5 Fabulous Gadgets</h4>
        <P>When it comes to travel, besides a willing spirit, you also need some handy tools and gadgets to make the journey memorable, enjoyable and convenient.What kind of a traveller are you?The detach from the world type or capture every moment on Instagram sort? You know what, it doesn’t matter. At the end of the day, every kind of traveller has a unique story and </P>
      </a></div>
    </div>
  </div>
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