<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<!--=======User Sign Up/ Registration=========-->
<?php
require 'connect.php';
require 'server.php';

$username = '';
$password = '';
$errors = array();

// LOGIN USER
if (isset($_POST['ulogin'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) array_push($errors, "Username is required");
  if (empty($password)) array_push($errors, "Password is required");

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>
<!--======End User Sign Up/ Registration======-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SafeNest Insurance System</title>

  <!-- CSS Links -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <style>
    /* Body and page background */
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('img/background/bg.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;

      /* Flex to center black container vertically & horizontally */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Black container - semi-transparent and centered */
    .container {
      
      padding: 50px 40px;
      border-radius: 15px;
      max-width: 900px;
      width: 90%;
      display: flex;
      justify-content: center; /* center white box horizontally */
      box-sizing: border-box;
    }

    /* White login box */
    .form-box {
      background: white;
      padding: 30px 25px;
      border-radius: 10px;
      width: 350px;
      color: black;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    .form-box h3 {
      color: #007BFF;
      margin-bottom: 25px;
      text-align: center;
    }

    .form-control {
      height: 45px;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #007BFF;
      border: none;
      width: 100%;
      padding: 12px;
      font-size: 16px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .signup-link {
      margin-top: 15px;
      font-size: 14px;
      text-align: center;
    }

    .signup-link a {
      font-weight: 600;
      color: #007BFF;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* Title above container */
    .title {
      position: absolute;
      top: 30px;
      width: 100%;
      text-align: center;
      font-size: 48px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      user-select: none;
    }
  </style>
</head>
<body>
  <!-- Title at top -->
  <div class="title">SafeNest Insurance </div>

  <!-- Black container centered -->
  <div class="container">
    <!-- White login box centered horizontally inside -->
    <form action="index.php" method="post" class="form-box">
      <?php include('errors.php'); ?>
      <h3>User Login</h3>
      <input type="text" class="form-control" name="username" placeholder="Username" required />
      <input type="password" class="form-control" name="password" placeholder="Password" required />
      <input type="submit" name="ulogin" class="btn btn-primary" value="Login" />
      <div class="signup-link">
        Don't have an account? <a href="signup.php">Sign up</a>
      </div>
     
<a href="admin.php" class="btn btn-secondary" style="margin-top: 10px; width: 100%; display: inline-block; text-align: center;">
  Admin Login
</a>

    </form>
  </div>
</body>
</html>

