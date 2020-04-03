<?php
include '../../page_include/database_access.php';
include '../../page_include/function.php';
$activation_kode = randomcode();
if (isset($_POST['register'])) {

  $id_user = $_POST['id_user'];
  $id_seller = $_POST['id_seller'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $phone = $_POST['phones'];
  $password = $_POST['password'];
  $passwordrepeat = $_POST['repeatpassword'];
  $usertype = $_POST['usertype'];
  $bankaccount = $_POST['bankaccount'];
  $onlinepay1 = $_POST['onlinepay1'];
  $timestamp = date("Y-m-d H:i:s");

  //Write an email
  if ($usertype == "Pembeli") {
    if ($email != "") {
      session_start();
      $_SESSION[email_temp_user] = $_POST['email'];
      $_SESSION[id_user_temp] = $_POST['id_user'];
      $sql = "SELECT * FROM fs_userbuyer where email = '$email'";
      $mysql = mysql_query($sql) or die (mysql_error());
      $check = mysql_num_rows($mysql);
      if ($check>0) {
        $sql = "INSERT INTO fs_userbuyer(id_user,name,username,phone_number,password,user_type,activation_status,activation_code,time_signup)
        VALUES('$id_user', '$firstname $lastname','$username','$phone','$password','$usertype', DEFAULT, '$activation_kode', '$timestamp')";
        $addSql = mysql_query($sql);
        header('location:../page.emailequal?email_equal%user');
      }
      else {
        $receipent = $email;
        $subject = "AQUAFISH.com || Verifikasi Email";
        $link = "http://localhost/fishstore/page_optional/page.emailactivated?common=$activation_kode";
        $message = "Hai,Terima kasih sudah bergabung. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
        <a href='$link'>$link</a> .<br> EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
        $header ="From: <aquafish.personal@gmail.com> "."\r\n".
        "Reply-To: noreply@aquafish.com"."\r\n".
        "CC: noreply@aquafish.com "."\r\n".
        "MIME-Version:1.0 "."\r\n".
        "Content-Type:text/html;charset=UTF-8 "."\r\n";
        mail($receipent, $subject, $message ,$header); //Email send
        //SQL script
        $addSql = mysql_query("INSERT INTO fs_userbuyer(id_user,name,email,username,phone_number,password,user_type,activation_status,activation_code,time_signup)
        VALUES('$id_user', '$firstname $lastname', '$email', '$username','$phone','$password','$usertype', DEFAULT, '$activation_kode', '$timestamp')") or die (mysql_error());
        if($addSql){
          echo '<script>
          alert("Pendaftaran di proses");
          window.location.href="http://localhost/fishstore/page.emailconfirm?confirm_mail%user"</script>';
        }
      }
    }
  }elseif ($usertype == "Pedagang") {
      if ($email != "") {
        session_start();
        $_SESSION[email_temp_seller] = $_POST['email'];
        $_SESSION[id_seller_temp] = $_POST['id_seller'];
        $sql = "SELECT * FROM fs_usertrader where email = '$email'";
        $mysql = mysql_query($sql);
        $check = mysql_num_rows($mysql);
        if ($check>0) {
          $sql = "INSERT INTO fs_usertrader(id_seller,name,username,phone_number,password,user_type,bankaccount,onlinepayment1,activation_status,activation_code,time_signup)
          VALUES('$id_seller', '$firstname $lastname','$username','$phone','$password','$usertype','$bankaccount','$onlinepay1', DEFAULT ,'$activation_kode', '$timestamp')";
          $addSql = mysql_query($sql);
          echo '<script>
          window.location.href="../page.emailequal?email_equal%seller"</script>';
        }else {
          $receipent = $email;
          $subject = "AQUAFISH.com || Verifikasi Email Pedagang";
          $link = "http://localhost/fishstore/page_optional/page.emailactivated?seller=$activation_kode";
          $message = "Hai,Terima kasih sudah bergabung. <br>Klik link tautan berikut untuk mengaktifkan akun anda.
          <a href='$link'>$link</a>. <br>EMAIL INI DIKIRIMKAN OTOMATIS, JANGAN MEMBALAS EMAIL INI";
          $header ="From: <aquafish.personal@gmail.com> "."\r\n";
          $header.="Reply-To: noreply-aquafish@aquafish.com \r\n";
          $header.="CC : noreply-aquafish@aquafish.com \r\n";
          $header.= "MIME-Version :1.0 \r\n";
          $header.="Content-Type : text/html; charset=UTF-8 \r\n";
          mail($receipent, $subject, $message, $header); //Email send
          //SQL script
          $addSql = mysql_query("INSERT INTO fs_usertrader(id_seller,name,email,username,phone_number,password,user_type,bankaccount,onlinepayment1,activation_status,activation_code,time_signup)
            VALUES('$id_seller', '$firstname $lastname', '$email','$username','$phone','$password','$usertype','$bankaccount','$onlinepay1', DEFAULT ,'$activation_kode', '$timestamp')") or die (mysql_error());
          if($addSql){
            echo '<script>
            alert("Pendaftaran di proses");
            window.location.href="http://localhost/fishstore/page.emailconfirm?confirm_mail%seller"</script>';
          }
        }
      }
    }
  }
 ?>
