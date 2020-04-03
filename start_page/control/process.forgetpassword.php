<?php
include '../../page_include/database_access.php';
include '../../page_include/function.php';
$reactivate_code = randomcode();
if (isset($_POST['common'])) {
  $emailReset = $_POST['emailforget'];
  $passBlank = "DEFAULT".date('Y/m/d')."";
  $status = 'NOT_ACTIVATED';

  $getsql = "SELECT * FROM fs_userbuyer WHERE email = '$emailReset'";
  $mysqlget= mysql_query($getsql) or die (mysql_error());
  $found = mysql_num_rows($mysqlget);

  if ($found>0) {
    $fetch = mysql_fetch_assoc($mysqlget);
    $id = $fetch['id_user'];

    $sql = "UPDATE fs_userbuyer SET password = '$passBlank' , activation_code = '$reactivate_code' , activation_status = '$status' WHERE id_user = '$id' ";
    $mysql = mysql_query($sql) or die (mysql_error());
    if ($mysql) {
      // code...
      $receipent = $emailReset;
      $subject = "AQUAFISH.com || Reset Password";
      $link = "http://localhost/fishstore/page.passwordreset.common?code=$reactivate_code";
      $message = "Hai,Password anda sudah disetel ulang. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
      <a href=".$link."> $link </a>.<br> EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
      $header ="From: <aquafish.personal@gmail.com> "."\r\n";
      $header.="Reply-To:noreply@aquafish.com \r\n";
      $header.="CC:noreply@aquafish.com \r\n";
      $header.= "MIME-Version:1.0 \r\n";
      $header.="Content-Type:text/html;charset=UTF-8 \r\n";
      mail($receipent, $subject, $message ,$header);

      echo "<script>alert('Email sudah dikirim');
            window.location.href='../login.user';</script>";
    }else {
      echo "<script>alert('Gagal');
            window.history.back();</script>";
    }

  }else {
    header('location:../page.notfoundemail?common');
  }
}elseif (isset($_POST['seller'])) {
  $emailReset = $_POST['emailforget'];
  $passBlank = "DEFAULT".date('Y/m/d')."";
  $status = 'NOT_ACTIVATED';

  $getsql = "SELECT * FROM fs_usertrader WHERE email = '$emailReset'";
  $mysqlget= mysql_query($getsql) or die (mysql_error());
  $found = mysql_num_rows($mysqlget);

  if ($found>0) {
    $fetch = mysql_fetch_assoc($mysqlget);
    $id = $fetch['id_seller'];

    $sql = "UPDATE fs_usertrader SET password = '$passBlank' , activation_code = '$reactivate_code' , activation_status = '$status' WHERE id_seller = '$id' ";
    $mysql = mysql_query($sql) or die (mysql_error());
    if ($mysql) {
      // code...
      $receipent = $emailReset;
      $subject = "AQUAFISH.com || Reset Password";
      $link = "http://localhost/fishstore/page.passwordreset.seller?code=$reactivate_code";
      $message = "Hai,Password anda sudah disetel ulang. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
      <a href=".$link."> $link </a>.<br> EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
      $header ="From: <aquafish.personal@gmail.com> "."\r\n";
      $header.="Reply-To:noreply@aquafish.com \r\n";
      $header.="CC:noreplyadmin@aquafish.com \r\n";
      $header.= "MIME-Version:1.0 \r\n";
      $header.="Content-Type:text/html;charset=UTF-8 \r\n";
      mail($receipent, $subject, $message ,$header);

      echo "<script>alert('Email sudah dikirim');
            window.location.href='../login.seller';</script>";
    }else {
      echo "<script>alert('Gagal');
            window.history.back();</script>";
    }

  }else {
    header('location:../page.notfoundemail?common');
  }
}

 ?>
