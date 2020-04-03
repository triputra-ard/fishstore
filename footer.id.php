
<script src="<?php echo $designation;?>js/style-bootstrap.js"></script>
<script src="<?php echo $designation;?>templates-design/js/sb-temp.min.js"></script>
<script src="<?php echo $designation;?>jquery/jquery-3.4.1.js"></script>
<script src="<?php echo $designation;?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $designation;?>js/bootstrap.min.js"></script>
<script src="<?php echo $designation;?>font-awesome/js/all.min.js"></script>
<script src="<?php echo $designation;?>js/function-tri.js"></script>
<script src="<?php echo $designation;?>datatables/jquery.dataTables.min.js">

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
