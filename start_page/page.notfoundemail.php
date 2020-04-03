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
                    <h4 class="text-center">Email kamu gak ada nih <a href="page.register"><b>Daftar</b></a> dulu ya.. <i class="far fa-grin-wink"></i> </h4>
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
                    <h4 class="text-center">Email kamu gak ada nih <a href="page.register"><b>Daftar</b></a> dulu ya.. <i class="far fa-grin-wink"></i> </h4>
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
