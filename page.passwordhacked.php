<?php
$titlePage = "Password terbajak";
require_once 'header.nav.all.php';?>
<br><br><br><br><br><br><br>
<div id="page-wrapper">
  <!--Head of page-->
  <?php
  if (isset($_GET['common'])) :
    $email = $_GET['email'];
    $passwordreset = decrypt_url($_GET['reset']);
    $sql = "UPDATE fs_userbuyer set password='$passwordreset' WHERE email='$email'";
    $mysql = mysql_query($sql); ?>
    <div class="container">
      <div class="card mb-6">
        <div class="card-header py-3 bg-danger">
          <center><h6 class="m-0 font-weight-bold text-white"><i class="fas fa-key"></i>  PASSWORD ANDA TELAH DIUBAH <i class="fas fa-exclamation-circle"></i></h6></center>
        </div>
        <div class="card-body">
          <h6 class="m-0 font-weight-bold text-gray-900 text-center">Seseorang telah merubah data informasi anda. Jangan khawatir, kami sudah menanganinya.
          Terima kasih atas respon cepat anda. Password anda diubah menjadi : <b> <?php echo $passwordreset; ?> </b>. Untuk melindungi akun anda mohon ubah password anda secara berkala.<br>Silahkan login kembali <a href="login_page/login.user">disini</a></h6>
        </div>
        <div class="card-body">
          <h6 class="text-center text-gray-900">Masalah Telah Selesai <i class="far fa-grin-wink" style="font-size:24px;"></i></h6>
        </div>
      </div>
    </div>
  <?php
  elseif (isset($_GET['seller'])) :
    $email = $_GET['email'];
    $passwordreset = decrypt_url($_GET['reset']);
    $sql = "UPDATE fs_usertrader set password='$passwordreset' WHERE email='$email'";
    $mysql = mysql_query($sql);
    ?>
    <div class="container">
      <div class="card mb-6">
        <div class="card-header py-3 bg-danger">
          <center><h6 class="m-0 font-weight-bold text-white"><i class="fas fa-key"></i>  PASSWORD ANDA TELAH DIUBAH <i class="fas fa-exclamation-circle"></i></h6></center>
        </div>
        <div class="card-body">
          <h6 class="m-0 font-weight-bold text-gray-900 text-center">Seseorang telah merubah data informasi anda. Jangan khawatir, kami sudah menanganinya.
          Terima kasih atas respon cepat anda. Password anda diubah menjadi : <b><?php echo $passwordreset; ?> </b>. Untuk melindungi akun anda mohon ubah password anda secara berkala.<br>Silahkan login kembali <a href="login_page/login.user">disini</a></h6>
        </div>
        <div class="card-body">
          <h6 class="text-center text-gray-900">Masalah Telah Selesai <i class="far fa-grin-wink" style="font-size:24px;"></i></h6>
        </div>
      </div>
    </div>
    <?php
  endif;
   ?>


</div>
<?php require_once 'footer.nav.all.php'; ?>
