<?php include 'header.nav.optional.php'; ?>
<br><br><br><br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper">
  <!--Head of page-->
  <div class="container">

      <?php if (isset($_GET['common'])): ?>
        <div class="col-xl-12 animated bounceIn">
          <div class="card mb-6 border-bottom-danger">
            <div class="card-header py-3 bg-danger">
              <h6 class="m-0 font-weight-bold text-white text-center">Akun anda nonaktifkan !</h6>
            </div>
            <div class="card-body">
              <center><button type="button" class="btn btn-rounded btn-danger" style="font-size:35px"><i class="fas fa-user-slash"></i> </button></center>
              <br>
              <h4 class="text-center">Oh ! <?php echo @$_SESSION[name_user]; ?></h4>
              <br>
              <h6 class="font-weight-bold text-gray-900 text-center">Kami menonaktifkan akun anda untuk sementara waktu.
                <br>
                <?php
                $id = @$_SESSION[id_user];

                $sql = "SELECT id_blocked,clauses FROM fs_userbuyer WHERE id_user = '$id'";
                $mysql = mysql_query($sql);
              while (  $fetchblocked = mysql_fetch_assoc($mysql)) {
                 ?>
                Kode pemblokiran : <b class="text-primary"><?php echo $fetchblocked['id_blocked']; ?></b>
              <?php } ?>
                <br>
                Hubungi <b class="text-success">aquafish.personal@gmail.com</b> Untuk mengkatifkan akun anda
              </h6>
            </div>
          </div>
        </div>
      <?php elseif(isset($_GET['seller'])): ?>
        <div class="col-xl-12 animated bounceIn">
          <div class="card mb-6 border-bottom-danger">
            <div class="card-header py-3 bg-danger">
              <h6 class="m-0 font-weight-bold text-white text-center">Akun anda nonaktifkan !</h6>
            </div>
            <div class="card-body">
              <center><button type="button" class="btn btn-rounded btn-danger" style="font-size:35px"><i class="fas fa-user-slash"></i> </button></center>
              <br>
              <h4 class="text-center">Oh ! <?php echo @$_SESSION[name_seller]; ?></h4>
              <br>
              <h6 class="font-weight-bold text-gray-900 text-center">Kami menonaktifkan akun anda untuk sementara waktu.
                <br>
                <?php
                $id = @$_SESSION[id_seller];

                $sql = "SELECT id_blocked,clauses FROM fs_usertrader WHERE id_seller = '$id'";
                $mysql = mysql_query($sql);
              while (  $fetchblocked = mysql_fetch_assoc($mysql)) {
                 ?>
                Kode pemblokiran : <b class="text-primary"><?php echo $fetchblocked['id_blocked']; ?></b>
              <?php } ?>
                <br>
                Hubungi <b class="text-success">aquafish.personal@gmail.com</b> Untuk mengkatifkan akun anda
              </h6>
            </div>
          </div>
        </div>
      <?php endif; ?>

  </div>
</div>
<?php include 'footer.nav.optional.php'; ?>
