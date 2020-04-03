<?php include 'header.nav.optional.php'; ?>
<br><br><br><br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper">
  <!--Head of page-->
  <?php if (isset($_GET['common'])) {
    echo '<div class="container">
      <div class="card mb-6 border-bottom-danger">
        <div class="card-header py-3 bg-danger">
          <h6 class="m-0 font-weight-bold text-white">Email anda belum diverifikasi !</h6>
        </div>
        <div class="card-body">
          <h6 class="font-weight-bold text-gray-900">Sepertinya anda belum men-verifikasi email anda.
          Untuk mengaktifkan akun anda, email anda harus diverifikasi terlebih dahulu.
          Kami sudah mengirimkan email untuk aktivasi akun, mohon cek email anda.</h6>
        </div>
        <div class="card-body text-center">
          <h6 class="text-gray-900"> Belum mendapatkan email ?<br>
          <a href="http://localhost/fishstore/page_include/process_resendemail?notactivated%common">Klik disini untuk kirim ulang</a></h6>
        </div>';
  }elseif (isset($_GET['seller'])) {
    echo '<div class="container">
      <div class="card mb-6 border-bottom-danger">
        <div class="card-header py-3 bg-danger">
          <h6 class="m-0 font-weight-bold text-white">Email anda belum diverifikasi !</h6>
        </div>
        <div class="card-body">
          <h6 class="font-weight-bold text-gray-900">Sepertinya anda belum men-verifikasi email anda.
          Untuk mengaktifkan akun anda, email anda harus diverifikasi terlebih dahulu.
          Kami sudah mengirimkan email untuk aktivasi akun, mohon cek email anda.</h6>
        </div>
        <div class="card-body text-center">
          <h6 class="text-gray-900"> Belum mendapatkan email ?<br>
          <a href="http://localhost/fishstore/page_include/process_resendemail?notactivated%common">Klik disini untuk kirim ulang</a></h6>
        </div>
      </div>
    </div>';
  }

  ?>


    </div>
  </div>

</div>
<?php include 'footer.nav.optional.php'; ?>
