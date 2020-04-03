<?php
include '../../page_include/database_access.php';

  $username = $_POST['emailUser'];
  $password = $_POST['passUser'];

  $sql = "SELECT * From fs_userbuyer Where email='$username' And password='$password'";
  $loginSql = mysql_query($sql) or die (mysql_error());
  $loginFound = mysql_num_rows($loginSql);
  $fetch = mysql_fetch_assoc($loginSql);

  if($loginFound>0){
    $datetime = $fetch[time_signup];
    $newtime = strtotime($datetime);

    $timesignup = date("D, d-M-Y H:i:s" , $newtime);
    session_start();
    $_SESSION[id_user] = $fetch[id_user];
    $_SESSION[name_user] = $fetch[name];
    $_SESSION[email_user] = $fetch[email];
    $_SESSION[username_user] = $fetch[username];
    $_SESSION[phone_user] = $fetch[phone_number];
    $_SESSION[password_user] = $fetch[password];
    $_SESSION[userType] = $fetch[user_type];
    $_SESSION[activationStatus] = $fetch[activation_status];
    $_SESSION[signup_user] = $timesignup;
    header('location:http://localhost/fishstore/application/user/user_home.id');
  }else {
    // code...
    header('location:http://localhost/fishstore/start_page/login.user?error=notmatch');
  }
 ?>
