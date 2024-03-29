<?php 

session_start();
require 'function.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  

  $result = mysqli_query($conn, "SELECT username FROM user WHERE
      id = $id");
      $row = mysqli_fetch_assoc($result);



        if($key === hash('sha256',$row['username'])){
          $_SESSION['login'] = true;
        }
}

if (isset($_SESSION["login"])){
    header("Location: dashboard_view.php");
    exit;
}



if(isset($_POST["login"])){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE
    username = '$username'");


  if(mysqli_num_rows($result) === 1){

    $row = mysqli_fetch_assoc($result);
    if (password_verify ($password, $row["password"])) {

      $_SESSION["login"] = true;

      if(isset($_POST["remember"])){

        setcookie('id',$row['id'],time() + 30);
        setcookie('key',hash('sha256',$row['username']),time()+60);
      }

      header("Location: dashboard_view.php");
      exit;
    }
  }

  $error = true;

}


?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>See Education</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }
  </style>
  <link href="sign-in.css" rel="stylesheet">

  

</head>

<body class="text-center" >


 

  <main class="form-signin w-100 m-auto">
    <form action="" method="post">
      <img class="mb-1" src="../assets/img/logo nav seed.png" alt="" width="150" height="70">
      <hr>
      <h1 class="h3 mb-3 fw-normal">Sign In</h1>

      <?php if(isset($error)):?>
    <p style="color :red; font-style:italic">username / password salah</p>
      <?php endif ; ?>

      <div class="form-floating">
        <input type="text" class="form-control" id="username" name="username" >
        <label for="username">Username </label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password">
        <label for="password">Password</label>
      </div>
      <div class="form-check d-flex justify-content-center mb-2">
        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" />
        <label class="form-check-label" for="remember">
          Remember Me
        </label>
      </div>
      <div class="mb-2">
        <a href="register_view.php" class="text-body">Register</a>  
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; See Education </p>
    </form>
  </main>



</body>

</html>