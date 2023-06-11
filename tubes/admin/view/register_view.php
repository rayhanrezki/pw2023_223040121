<?php 
  require 'function.php';

  if (isset($_POST["register"])){

    if(registrasi($_POST) > 0){
      echo "<script>
              alert ('user baru berhasil ditambahkan');
            </script>";
    }else {
      echo mysqli_error($conn);
    }

  }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Register | SEED </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">





  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <header >
    
  </header>

  <main>
  <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input name="username" type="text" id="username" class="form-control"  />
                      <label for="username">Username</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input name="password" type="password" id="password" class="form-control" />
                      <label for="password">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input name="repeatpassword" type="password" id="repeatpassword" class="form-control" />
                      <label for="repeatpassword">Repeat your password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../assets/img/logo nav seed.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- FOOTER -->
    <footer class="container fixed-bottom">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/style.js"></script>


</body>

</html>
