<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User-Sign up</title>
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

	<!-- *******************************************************
	********************************************************** -->

	<div class="signupbox">
		<h1>Users' Sign up Here</h1>
		<form method="post" action="register.php">
		<?php include('errors.php'); ?>
			<p>User Name</p>
			<input type="text" name="username"  value="<?php echo $username; ?>">
			<p>Email Address</p>
			<input type="text" name="email" value="<?php echo $email; ?>">
			<p>Password</p>
			<input type="password" name="password_1">
			<p>Confirm Password</p>
			<input type="password" name="password_2">
			<input type="Submit" name="register" value="Sign in">
			<a href="../MediDoctor.com/login.php">Already have an account </a>
		</form>
	</div>

</body>
</html>