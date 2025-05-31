<?php
session_start();
require 'connect.php';

$username = '';
$password = '';
$errors = array();

if (isset($_POST['admlogin'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) array_push($errors, "Username is required");
  if (empty($password)) array_push($errors, "Password is required");

  if (count($errors) == 0) {
    #$password = md5($password); // NOTE: consider using password_hash in real apps
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('Location: adminhome.php');
      exit();
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SafeNest Insurance</title>
  <link rel="icon" href="img/l.png" type="image/png" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('img/background/abg.webp') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .title {
      position: absolute;
      top: 30px;
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      color: blueviolet;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
    }

    .form-box {
      background: white;
      padding: 40px 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    }

    .form-box h3 {
      color: #191970;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-box p {
      text-align: center;
      margin-bottom: 25px;
    }

    .form-control {
      height: 45px;
      margin-bottom: 20px;
    }

    .btn-primary {
      width: 100%;
      padding: 12px;
      font-size: 16px;
    }

    .btn-primary:hover {
      background-color: #004ea8;
    }

    a {
      color: #007BFF;
      font-weight: 600;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Top Centered Title -->
  <div class="title">SafeNest Insurance </div>

  <!-- Centered White Login Box -->
  <form action="admin.php" method="post" class="form-box">
    <?php include('errors.php'); ?>
    <h3>Administrator Login</h3>

    <input type="text" class="form-control" name="username" placeholder="Username" required />
    <input type="password" class="form-control" name="password" placeholder="Password" required />
 <input type="submit" name="admlogin" class="btn btn-primary btn-pill" value="Login" />
  
    <p>Login as <a href="index.php">Ordinary User</a></p>
  </form>

</body>
</html>
