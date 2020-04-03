<?php
$titlePage = "LOGIN";
require_once 'header.php';?>
<div id="preload">

</div>
<body class="bg-gradient-info">
  <?php include 'eror.code.php'; ?>
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-primary">
                <center><br><br><img src="../assets/img/logoaqua.png" height="250px" width="250px"><br>
                  <h3 class="text-white text-center"> AQUAFISH.COM LOGIN</h4></center>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Masuk <i class="fas fa-sign-in-alt"></i></h1>
                  </div>
                  <form class="user" action="control/process.loginuser" method="post">
                    <div class="form-group input-group form-label-group">
                      <div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i> </span></div>
                      <input required type="email" class="form-control form-control-user" id="InputEmail" aria-describedby="emailHelp" placeholder="Masukkan alamat Email.." name="emailUser">
                    </div>
                  </div>
                    <div class="form-group input-group">
                      <div class="input-group" id="InputPassword">
                        <div class="input-group-prepend"><span class="input-group-text"><a class="nolink" href=""><i id="icon" class="fas fa-eye-slash" aria-hidden="true"></i></a></span></div>
                      <input type="password" required class="form-control form-control-user" placeholder="Password" name="passUser">
                    </div>
                  </div>
                    <div class="text-center">
                      <a class="small" href="login.seller">Pedagang ? Klik disini.</a>
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Masuk">
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="page.forgetpassword?common">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="page.register">Belum punya akun ? buat akun baru!</a>
                  </div>
                  <hr>
                  <a href="../home" class="btn btn-default btn-block"><i class="fas fa-home"></i><span>Kembali ke beranda</span> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

<?php require_once 'footer.php'; ?>
