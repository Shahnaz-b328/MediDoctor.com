<?php 
 include '../includes/Session.php';
 Session::init();
?>
<?php include '../config/config.php'; ?>
<?php include '../helper/Format.php'; ?>
<?php include '../includes/Database.php'; ?>
<?php
  $db = new Database();
  $fm = new Format();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/stylelogin.css"/>
</head>
<body>
<div class="container">

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $name = $fm->validation($_POST['name']);
 $password = $fm->validation(md5($_POST['password']));

 $rname = mysqli_real_escape_string($db->link, $name);
 $password = mysqli_real_escape_string($db->link, $password);

    $query = "SELECT * FROM admin WHERE name='$name' 
     and password='$password'";
    $result = $db->select($query);
    if ($result != false) {
        $value = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);
        if($row > 0)
        {
        Session::set("login", true);
        Session::set("name", $value['name']);
        Session::set("userId", $value['id']);
        header("Location: index.php");
      } else {
        echo "<span style='color:red;font-size:18px;'>No Result Found !!.</span>";
      } 
    } else {
        echo "<span style='color:red;font-size:18px;'>Username Or Password not Matched !!.</span>";
      }
 }
?>

 <form action="login.php" method="post">
 <div class="contain">
  <h1>Admin Login</h1>
  </div>
  <div>
   <input type="text" placeholder="Username" required="1" 
     name="name" />
  </div>
  <div>
   <input type="password" placeholder="Password" required="1" 
    name="password" />
  </div>
  <div>
   <input type="submit" value="Log in" />
  </div>
 </form>
 </div>
 
</body>
</html>