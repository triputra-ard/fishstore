<?php
include '../../page_include/database_access.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * From administrator Where admin_username = '$username' And admin_password='$password'";
  $loginSql = mysql_query($sql) or die (mysql_error());
  $loginFound = mysql_num_rows($loginSql);
  $fetch = mysql_fetch_assoc($loginSql);

  if($loginFound>0){
    session_start();
    $_SESSION[id_admin] = $fetch[id_admin];
    $_SESSION[name_admin] = $fetch[admin_name];
    $_SESSION[username_admin] = $fetch[admin_username];
    $_SESSION[password_admin] = $fetch[admin_password];
    header('location:http://localhost/fishstore/administrator/home');
  }else {
    // code...
    header('location:http://localhost/fishstore/start_page/login.admin?error=unknown');
  }
 ?>
