<?php

include 'header.nav.all.php'; ?>
<br><br><br><br>
<div id="page-wrapper"><br>
  $code = @$_GET['code'];

  $sql = "SELECT * From fs_userseller Where activation_code ='$code' And activation_status = 'NOT_ACTIVATED'";
  $mysql = mysql_query($sql);
  $numssql = mysql_num_rows($mysql);

  if ($numssql > 0) {
    // code...
    $fetchsql = mysql_fetch_assoc($mysql);
    $id = $fetchsql['id_seller'];
    $sql2= "UPDATE fs_userseller SET activation_status ='ACTIVATED' where id_seller = '$id'";
    mysql_query($sql2);
  }
  <div class="features-boxed">
    <div class="container">
      <div class="row justify-content-center features">
          <div class="col-lg-10 item">
                  <h1 class="text-center">Halo Pedagang. <?php echo $fetchsql['name']; ?>, Selamat Bergabung</h1>
                  <h3 class="name">Email anda sudah diverifikasi.</h3>
                  <p class="description">Sekarang anda sudah bisa menjual ikan hias anda !</p>
                  <a href="http://localhost/fishstore/login_page/login.seller" class="learn-more">Selamat berjualan ikan hias ! »</a></div>
          </div>
        </div>
    </div>

  </div>

<br></div>
<?php include 'footer.nav.all.php'; ?>
