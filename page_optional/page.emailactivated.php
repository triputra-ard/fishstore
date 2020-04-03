<?php
$titlePage = "Aktivasi Email";
include 'header.nav.optional.php'; ?>
<br><br><br><br><br><br><br>
<div id="page-wrapper">
  <!-- Buyer Section -->
  <?php
  if (isset($_GET['common'])):
    $code = @$_GET['common'];

    $sql = "SELECT * From fs_userbuyer Where activation_code ='$code' And activation_status = 'NOT_ACTIVATED'";
    $mysql = mysql_query($sql) or die (mysql_error());
    $commoncode = mysql_num_rows($mysql);
    ?>
    <?php if ($commoncode === 0): ?>
      <div class="features-boxed bg-warning">
        <div class="container">
          <div class="row justify-content-center features text-white">
              <div class="col-lg-10 item">
                <h1 class="text-center">Uh Oh ! Kami tidak mengenali kode anda <i class="far fa-frown-open"></i> </h1>
                <h3 class="name">Ini aneh kami tidak dapat mengenali kode aktivasi anda.</h3>
                <p class="description text-white"><b>Periksa apakah tautan anda sudah benar. Lakukan perintah salin tempel pada tautan yang dikirimkan ke email anda</b></p>
              </div>
            </div>
        </div>
      </div>
    <?php else: ?>
      <?php
      $fetchsql = mysql_fetch_array($mysql);
      $id = $fetchsql['id_user'];
      $sql2= "UPDATE fs_userbuyer SET activation_status ='ACTIVATED' where id_user = '$id'";
      mysql_query($sql2);
       ?>
      <div class="features-boxed">
        <div class="container">
          <div class="row justify-content-center features">
              <div class="col-lg-10 item">
                      <h1 class="text-center">Halo, Selamat Bergabung</h1>
                      <h3 class="name">Email anda sudah diverifikasi.</h3>
                      <p class="description">Sekarang anda sudah bisa membeli ikan hias favorit anda !</p>
                      <a href="http://localhost/fishstore/start_page/login.user" class="learn-more">Ayo belanja ikan ! »</a></div>
              </div>
            </div>
        </div>
    <?php endif; ?>

<!-- Seller Section -->
  <?php
  elseif (isset($_GET['seller'])):
    $code = @$_GET['seller'];

    $sql = "SELECT * From fs_usertrader Where activation_code ='$code' And activation_status = 'NOT_ACTIVATED'";
    $mysql = mysql_query($sql);
    $sellercode = mysql_num_rows($mysql);
    ?>
    <?php if ($sellercode === 0): ?>
      <div class="features-boxed bg-warning">
        <div class="container">
          <div class="row justify-content-center features text-white">
              <div class="col-lg-10 item">
                      <h1 class="text-center">Uh Oh ! Kami tidak mengenali kode anda <i class="far fa-frown-open"></i> </h1>
                      <h3 class="name">Ini aneh kami tidak dapat mengenali kode aktivasi anda.</h3>
                      <p class="description text-white"><b>Periksa apakah tautan anda sudah benar. Lakukan perintah salin tempel pada tautan yang dikirimkan ke email anda</b></p>
              </div>
            </div>
          </div>
        </div>
        <?php else: ?>
        <?php
        // code...
        $fetchsql = mysql_fetch_assoc($mysql);
        $id = $fetchsql['id_seller'];
        $sql2= "UPDATE fs_usertrader SET activation_status ='ACTIVATED' where id_seller = '$id'";
        mysql_query($sql2); ?>

          <div class="features-boxed">
            <div class="container">
              <div class="row justify-content-center features">
                  <div class="col-lg-10 item">
                          <h1 class="text-center">Halo Pedagang. '. $fetchsql['name'].', Selamat Bergabung</h1>
                          <h3 class="name">Email anda sudah diverifikasi.</h3>
                          <p class="description">Sekarang anda sudah bisa menjual ikan hias anda !</p>
                          <a href="http://localhost/fishstore/start_page/login.seller" class="learn-more">Selamat berjualan ikan hias ! »</a></div>
                  </div>
                </div>
            </div>
    <?php endif; ?>

  <?php endif; ?>

</div>
<?php include 'footer.id.php'; ?>
