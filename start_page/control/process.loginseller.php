<?php
include '../../page_include/database_access.php';

  $username = $_POST['emailUser'];
  $password = $_POST['passUser'];

  $sql="SELECT * From fs_usertrader Where email='$username' And password='$password'";
  $loginSql = mysql_query($sql) or die (mysql_error());
  $loginFound = mysql_num_rows($loginSql);
  $fetch = mysql_fetch_assoc ($loginSql);

  if($loginFound>0){
    $datetime = $fetch['time_signup'];
    $newtime = strtotime($datetime);

    $timesignup = date("D, d-M-Y H:i:s" , $newtime);
    session_start();
    $_SESSION[id_seller] = $fetch['id_seller'];
    $_SESSION[name_seller] = $fetch['name'];
    $_SESSION[email_seller] = $fetch['email'];
    $_SESSION[username_seller] = $fetch['username'];
    $_SESSION[phone_seller] = $fetch['phone_number'];
    $_SESSION[password_seller] = $fetch['password'];
    $_SESSION[picture_account] = $fetch['picture'];
    $_SESSION[signup_seller] = $timesignup;
    $_SESSION[bankpayment_seller] = $fetch['bankaccount'];
    $_SESSION[onlinepayment_seller] = $fetch['onlinepayment1'];
    $_SESSION[userType] = $fetch['user_type'];
    $_SESSION[activationStatus] = $fetch['activation_status'];
    header('location:http://localhost/fishstore/application/seller/seller_home.id.php');
  }else {
    header('location:http://localhost/fishstore/start_page/login.seller.php?error=notmatch');
  }

  /*else {
    // code...
    header('location:http://localhost/fishstore/login_page/login.seller.php');
  }*/
 ?>
