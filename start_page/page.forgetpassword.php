<?php
$titlePage = "LUPA PASSWORD";
require_once 'header.php'; ?>
<body class="bg-gradient-info">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <?php
      if (isset($_GET['common'])) : ?>
        <div class="col-xl-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-primary"><br><br>
                  <center><img src="<?php echo $logoLink; ?>" height="250px" width="250px"><br>
                    <h3 class="text-white text-center"> AQUAFISH.COM Reset Password</h4></center>
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Lupa password ?</h1>
                      <p class="mb-4">Masukkan alamat email anda dibawah ini, kami akan memberikan link untuk reset password anda.</p>
                    </div>
                    <form class="user" action="control/process.forgetpassword" method="post">
                      <label for="emailReset">Email :</label>
                      <div class="form-group ">
                        <input name="emailforget" type="email" class="form-control form-control-user" id="emailReset" aria-describedby="emailHelp" placeholder="Masukkan alamat Email">
                      </div>
                      <hr>
                      <input name="common" type="submit" class="btn btn-primary btn-user btn-block" value="Reset">
                      <hr>
                    </form>
                    <hr>
                    <a href="../home" class="btn btn-default btn-block"><i class="fas fa-home"></i> <span>Kembali ke beranda</span> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        elseif (isset($_GET['seller'])) : ?>
        <div class="col-xl-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-primary"><br><br>
                  <center><img src="<?php echo $logoLink; ?>" height="250px" width="250px"><br>
                    <h3 class="text-white text-center"> AQUAFISH.COM Reset Password</h4></center>
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Lupa password ?</h1>
                      <p class="mb-4">Masukkan alamat email anda dibawah ini, kami akan memberikan link untuk reset password anda.</p>
                    </div>
                    <form class="user" action="control/process.forgetpassword" method="post">
                      <label for="emailReset">Email :</label>
                      <div class="form-group ">
                        <input name="emailforget" type="emailforget" class="form-control form-control-user" id="emailReset" aria-describedby="emailHelp" placeholder="Masukkan alamat Email">
                      </div>
                      <hr>
                      <input name="seller" type="submit" class="btn btn-primary btn-user btn-block" value="Reset">
                      <hr>
                    </form>
                    <hr>
                    <a href="../home" class="btn btn-default btn-block"><i class="fas fa-home"></i> <span>Kembali ke beranda</span> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </body>
<?php require_once 'footer.php'; ?>
