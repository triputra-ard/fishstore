<?php
$titlePage  = "Bantuan";
include 'header.nav.optional.php'; ?>
<br><br><br><br><br>
<div id="preload">
</div>
<div id="page-wrapper">

  <div class="container">
    <div class="card shadow mb-12 animated bounceInDown">
      <div class="card-header bg-primary d-flex flex-row align-item-right justify-content-between">
        <h4 class="m-0 font-weight-bold text-gray-100">Bantuan</h4>
        <h4 class="m-0 font-weight-bold text-gray-100"><i class="fas fa-question-circle"></i> </h4>
      </div>
      <div class="card-body">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="#customerservice" class="nav-link active" data-toggle="pill"><i class="fas fa-headset"></i> Layanan Pelanggan</a>
          </li>
          <li class="nav-item">
            <a href="#sellerhelper" class="nav-link" data-toggle="pill"><i class="fas fa-store"></i> Untuk Pedagang</a>
          </li>
          <li class="nav-item">
            <a href="#customerhelper" class="nav-link" data-toggle="pill"><i class="fas fa-shopping-cart"></i> Untuk Pembeli</a>
          </li>
          <li class="nav-item">
            <a href="#userAgreement" class="nav-link" data-toggle="pill"><i class="fas fa-file-signature"></i> Persyaratan Pengguna</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane container active" id="customerservice">
            <br>
            <div class="card-body bg-secondary">
              <h4 class="text-gray-100 text-center">Bantuan Langsung Customer Service <i class="fas fa-headset"></i></h4>
              <p class="text-center text-gray-100">Untuk saat ini kami belum menyediakan <b>Bantuan Langsung Customer Service</b> pada aplikasi</p><br>
              <p class="text-center text-gray-100">Jangan khawatir, anda bisa mendapatkan bantuan <b>Customer Service</b> melalui Email.
                Anda bisa mendapatkan bantuan dengan cara mengirimkan email kepada kami dengan format :<br></p>
                <p class="text-center text-gray-100">SUBJEK/SUBJECT : Aquafish | BANTUAN_Nama lengkap anda <br>
                Isi : Isi pesan anda <br>
                Kirim ke : aquafish.personal@gmail.com</p>
            </div>
          </div>
          <div class="tab-pane container" id="sellerhelper">
            <br>
            <div class="table-responsive">
              <table class="table table-stripped table-bordered">
                <tr>
                  <td colspan="2"><b>Untuk Pedagang</b></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td><a href="helper_seller1">Bantuan pengemasan yang baik dan benar</a></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td><a href="helper_seller2">Bantuan transaksi dan pengembalian dana</a></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td><a href="helper_seller3">Kontributor AQUAFISHpedia BETA</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab-pane container" id="customerhelper">
            <br>
            <div class="table-responsive">
              <table class="table table-stripped table-bordered">
                <tr>
                  <td colspan="2"><b>Untuk Pembeli</b></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td><a href="helper_user1">Bantuan kebijakan pengembalian dana</a></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td><a href="helper_user2">Bantuan pembatalan pesanan</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab-pane container" id="userAgreement">
            <br>
            <?php include 'view/view.useragreement.php'; ?>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
<?php include 'footer.nav.optional.php'; ?>
