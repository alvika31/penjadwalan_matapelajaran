<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body>
<main style="background-image: url(<?= base_url('uploads/login.jpg') ?>); background-size:cover; background-position:center;">
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?= base_url('uploads/logo.png') ?>" class="logo" width="100px" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login Guru</h5>
                    <p class="text-center small">Enter your NIP & password to login</p>
                  </div>

                  <?php echo $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= site_url('auth/login_guru') ?>">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">NIP</label>
                      <div class="input-group has-validation">
                        <input type="text" name="nip" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your NIP.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <input type="submit" value="Login" class="btn btn-danger btn-user btn-block mt-3">
                    </div>
                    <div class="col-12">

                    </div>
                  </form>

                </div>
              </div>
              <a href="<?= site_url('auth') ?>" style="color:red"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("exampleInputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>