<?php
session_start();
if (@$_SESSION[userType] == "Pedagang") {
  // code...
  header('location:application/seller/seller_home.id');
}elseif (@$_SESSION[userType] == "Pembeli") {
  // code...
  header('location:application/user/user_home.id');
}
include 'page_include/author.php';
include 'page_include/database_access.php';
include 'page_include/function.php';
include 'page_include/pagelink.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAFISH , Belanja ikan jadi mudah || <?php echo $titlePage; ?></title>
    <link rel="stylesheet" href="<?php echo $designation;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $designation;?>font-awesome/css/all.min.css">
    <!--<link rel="stylesheet" href="assets/css/signika-negative.css">-->
    <link rel="stylesheet" href="<?php echo $designation;?>css/Features-Boxed.css">
    <link rel="stylesheet" href="<?php echo $designation;?>css/Footer-Clean.css">
    <link rel="stylesheet" href="<?php echo $designation;?>css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?php echo $designation;?>templates-design/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="<?php echo $designation;?>css/styles.css">
    <link rel="stylesheet" href="<?php echo $designation;?>datatables/datatables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $designation;?>animate/animate.min.css">
</head>
