<?php
require_once 'header.nav.all.php'; ?>
<br><br><br><br><br><br><br>
<div id="page-wrapper">
<?php
$code = @$_GET['code'];

$sql = "SELECT * From fs_userbuyer Where activation_code ='$code' And activation_status = 'NOT_ACTIVATED'";
$mysql = mysql_query($sql);
$numssql = mysql_num_rows($mysql);

if ($numssql > 0) {
  // code...
  $fetchsql = mysql_fetch_assoc($mysql);
  $id = $fetchsql['id_user'];
  $sql2= "UPDATE fs_userbuyer SET activation_status ='ACTIVATED' where id_user = '$id'";
  mysql_query($sql2);
}
 ?>
  <div class="features-boxed">
    <div class="container">
      <div class="row justify-content-center features">
          <div class="col-lg-10 item">
                  <h1 class="text-center">Hai, <?php echo $fetchsql['name']; ?></h1>
                  <h3 class="name">Password anda sudah disetel ulang menjadi : <?php echo $fetchsql['password']; ?>.</h3>
                  <p class="description">Sekarang anda bisa login kembali !</p>
                  <a href="login_page/login.user" class="learn-more">Klik disini »</a></div>
          </div>
        </div>
    </div>

  </div>

</div>
<?php require_once 'footer.id.php'; ?>
