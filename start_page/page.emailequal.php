<?php
$titlePage = "REGISTRASI";
require_once 'header.php';
session_start();
$id_user_temp = @$_SESSION[id_user_temp];
$id_seller_temp = @$_SESSION[id_seller_temp];
?>
<body class="bg-sky-blue">
  <!--Head of page-->
  <br><br><br><br><br>
  <?php
  if(isset($_GET['email_equal%user'])){
    echo '<div class="container">
      <div class="card mb-6 border-bottom-danger shadow">
        <div class="card-header py-3 bg-danger">
          <h6 class="m-0 font-weight-bold text-white">Email anda sudah ada !</h6>
        </div>
        <div class="card-body">
          <h6 class="font-weight-bold text-gray-900">Email yang anda masukkan sudah ada. mohon masukkan email lain</h6>
        </div>
        <div class="card-body">
          <form class="user" action="control/process.reregister?resignin" method="post">
            <div class="form-group">
              <input class="form-control" type="email" name="email" value="'.@$_SESSION[email_temp_user].'" placeholder="Masukkan Email kembali" required>
            </div>
            <div class="form-group">
              <input class="btn btn-block btn-primary" type="submit" name="resignin" value="Kirim">
            </div>
          </form>
        </div>
    </div>
  </div>';
}elseif (isset($_GET['email_equal%seller'])) {
  echo '<div class="container">
    <div class="card mb-6 border-bottom-danger shadow">
      <div class="card-header py-3 bg-danger">
        <h6 class="m-0 font-weight-bold text-white">Email anda sudah ada !</h6>
      </div>
      <div class="card-body">
        <h6 class="font-weight-bold text-gray-900">Email yang anda masukkan sudah ada. mohon masukkan email lain</h6>
      </div>
      <div class="card-body">
        <form class="user" action="control/process.reregister?resignin%seller" method="post">
          <div class="form-group">
            <input class="form-control" type="email" name="email" value="'.@$_SESSION[email_temp_seller].'" placeholder="Masukkan Email kembali" required>
          </div>
          <div class="form-group">
            <input class="btn btn-block btn-primary" type="submit" name="resignin%seller" value="Kirim">
          </div>
        </form>
      </div>
  </div>
</div>';
}   ?>
</body>
<?php require_once 'footer.php'; ?>
