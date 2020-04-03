<?php
$titlePage = "Konfirmasi Email";
require_once 'header.nav.all.php';?>
<br><br><br><br><br><br><br>
<div id="page-wrapper">
  <!--Head of page-->
  <?php
  if (isset($_GET['confirm_mail%user'])) {
    // code...
    echo '<div class="container">
      <div class="card mb-6">
        <div class="card-header py-3 bg-primary">
          <h6 class="m-0 font-weight-bold text-white">Konfirmasi Email</h6>
        </div>
        <div class="card-body">
          <h6 class="m-0 font-weight-bold text-gray-900 text-center">Kami sudah mengirimkan email untuk aktivasi akun, silahkan cek email anda.
          Terima kasih</h6>
        </div>
        <div class="card-body">
          <h6 class="text-center text-gray-900">Belum mendapatkan email ?<br>
          <a href="page_include/process_resendemail?resend_mail%user">Klik disini untuk kirim ulang</a></h6>
        </div>
      </div>
    </div>';
  }
  elseif (isset($_GET['confirm_mail%seller'])) {
    // code...
    echo '<div class="container">
      <div class="card mb-6">
        <div class="card-header py-3 bg-primary">
          <h6 class="m-0 font-weight-bold text-white">Konfirmasi Email</h6>
        </div>
        <div class="card-body">
          <h6 class="m-0 font-weight-bold text-gray-900 text-center">Kami sudah mengirimkan email untuk aktivasi akun, silahkan cek email anda.
          Terima kasih</h6>
        </div>
        <div class="card-body">
          <h6 class="text-center text-gray-900">Belum mendapatkan email ?<br>
          <a href="page_include/process_resendemail?resend_mail%seller">Klik disini untuk kirim ulang</a></h6>
        </div>
      </div>
    </div>';
  }


   ?>


</div>
<?php require_once 'footer.nav.all.php'; ?>
