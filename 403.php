<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAFISH ACCESS DENIED</title>
    <link rel="stylesheet" href="http://localhost/fishstore/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/font-awesome/css/all.min.css">
    <!--<link rel="stylesheet" href="assets/css/signika-negative.css">-->
    <link rel="stylesheet" href="http://localhost/fishstore/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/templates-design/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/css/styles.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/datatables/datatables.bootstrap4.min.css">
    <link rel="stylesheet" href="http://localhost/fishstore/assets/animate/animate.min.css">
</head>
<body class="bg-sea-level">
<br>
<div id="page-wrapper">
  <div class="features-boxed animated bounceInUp">
    <div class="container">

    <div class="text-center">
      <div class="error mx-auto" data-text="404">403</div>
      <p class="lead text-gray-800 mb-5">AKSES DITOLAK</p>
      <div class="text-center animated delay-1s slow bounceIn">
        <div class="alert alert-danger">
        <i class="fas fa-times text-white img-fluid" style="font-size:340px"></i>
      </div> </div>
      <p class="text-gray-900 mb-0"><b>Oh Anda tidak mempunyai akses untuk melakukan ini</b></p>
      <a href="#" onclick="Return()">&larr; Bawa saya kembali</a>
    </div>

    </div>
  </div>
</div>

<script src="http://localhost/fishstore/assets/js/style-bootstrap.js"></script>
<script src="http://localhost/fishstore/assets/templates-design/js/sb-temp.min.js"></script>
<script src="http://localhost/fishstore/assets/jquery/jquery-3.4.1.js"></script>
<script src="http://localhost/fishstore/assets/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/fishstore/assets/js/bootstrap.min.js"></script>
<script src="http://localhost/fishstore/assets/font-awesome/js/all.min.js"></script>
<script src="http://localhost/fishstore/assets/js/style-bootstrap.js"></script>
<script src="http://localhost/fishstore/assets/datatables/jquery.dataTables.min.js">

</script>
<script>
function Return(){
  window.history.back();
}
$(document).ready(function() {
  $('#dataTable').DataTable();
});

(function($){
  $(window).on('load', function(){
    $('#preload').fadeOut('5000',function(){
      $(this).hide();
    });
  });
})(jQuery);
</script>
</body>
</html>
