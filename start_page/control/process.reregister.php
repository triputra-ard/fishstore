<?php
error_reporting(0);
session_start();
$id_user_temp = @$_SESSION[id_user_temp];
$id_seller_temp = @$_SESSION[id_seller_temp];
if (isset($_POST['resignin'])) {
    include '../../page_include/database_access.php';
    $email = $_POST['email'];
    $sqlget = "SELECT * FROM fs_userbuyer where id_user = '$id_user_temp'";
    $mysql_view = mysql_query($sqlget);
    $getsql = mysql_fetch_assoc($mysql_view);
    $activation_kode= $getsql['activation_code'];
    if ($email != "") {
      $sql = "SELECT * From fs_userbuyer where email = '$email'";
      $mysql = mysql_query($sql);
      $check = mysql_num_rows($mysql);
      if ($check>0) {
        echo '<script>
        alert("Email Sudah Ada");
        window.location.href="../page.emailequal.php?email_equal%user";</script>';
      }
      else {
        $receipent = $email;
        $subject = "AQUAFISH.com || Verifikasi Email";
        $link = "http://localhost/fishstore/page_emailactivated?common=$activation_kode";
        $message = "Hai,Terima kasih sudah bergabung. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
        <a href='$link'>$link</a>.<br> EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
        $header ="From: <aquafish.personal@gmail.com> \r\n";
        $header.="Reply-To: noreply@aquafish.com \r\n";
        $header.="CC: noreply@aquafish.com \r\n";
        $header.= "MIME-Version:1.0 \r\n";
        $header.="Content-Type:text/html;charset=UTF-8 \r\n";
        mail($receipent, $subject, $message ,$header); //Email send
        $sql = "UPDATE fs_userbuyer SET email = '$email' WHERE id_user ='$id_user_temp'";
        mysql_query($sql);
        echo '<script>
        alert("Email berhasil dikirim kembali");
        window.location.href="http://localhost/fishstore/page.emailconfirm.php?confirm_mail%user"</script>';
      }
    }
  }elseif (isset($_POST['resignin%seller'])) {
      include '../../page_include/database_access.php';
      $email = $_POST['email'];
      $sqlget = "SELECT * FROM fs_usertrader where id_seller = '$id_seller_temp'";
      $mysql_view = mysql_query($sqlget);
      $getsql = mysql_fetch_assoc($mysql_view);
      $activation_kode= $getsql['activation_code'];
      if ($email != "") {
        $sql = "SELECT * From fs_usertrader where email = '$email'";
        $mysql = mysql_query($sql);
        $check = mysql_num_rows($mysql);
        if ($check>0) {
          echo '<script>
          alert("Email Sudah Ada");
          window.location.href="../page.emailequal.php?email_equal%seller";</script>';
        }
        else {
          $receipent = $email;
          $subject = "AQUAFISH.com || Verifikasi Email";
          $link = "http://localhost/fishstore/page_emailactivated?seller=$activation_kode";
          $message = "Hai,Terima kasih sudah bergabung. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
          <a href='$link'>$link</a>.<br> EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
          $header ="From: <aquafish.personal@gmail.com> \r\n";
          $header.="Reply-To: noreply@aquafish.com \r\n";
          $header.="CC: noreply@aquafish.com \r\n";
          $header.= "MIME-Version:1.0 \r\n";
          $header.="Content-Type:text/html;charset=UTF-8 \r\n";
          mail($receipent, $subject, $message ,$header); //Email send
          $sql = "UPDATE fs_usertrader SET email = '$email' WHERE id_user = '$id_user_temp' ";
          mysql_query($sql);
          echo '<script>
          alert("Email berhasil dikirim kembali");
          window.location.href="http://localhost/fishstore/page.emailconfirm.php?confirm_mail%seller"</script>';
        }
      }
    }


 ?>
