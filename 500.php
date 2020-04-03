<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER 500</title>
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
      <div class="error mx-auto" data-text="500">500</div>
      <p class="lead text-gray-800 mb-5">Internal Server Error</p>
      <p class="text-gray-900 mb-0"><b>The server encountered an internal error or misconfiguration and was unable to complete your request.

Please contact the server administrator at postmaster@localhost to inform them of the time this error occurred, and the actions you performed just before this error.

More information about this error may be available in the server error log.

Additionally, a 500 Internal Server Error error was encountered while trying to use an ErrorDocument to handle the request</b></p>
      <a href="http://localhost/fishstore/home">&larr; Kembali ke halaman awal</a>
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
