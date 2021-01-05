<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User-Log in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>

  <div class="main">
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
          <li><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li class="active"><a href="../MediDoctor.com/register.php">Registration</a></li>
      </ul>

        

    </div>
   </div>
   <!-- ***************************************************
   ********************************************************* -->

  <div class="loginbox">
    <h1>Users Log In Here</h1>
	<form method="post" action="login.php">
	<?php include('errors.php'); ?>
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username"> 
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="Submit" name="user_login" value="login">
      <a href="../MediDoctor.com/register.php">Don't have an account? </a>
    </form>
  </div>


</body>
</html>