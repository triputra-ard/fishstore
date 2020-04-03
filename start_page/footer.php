<script src="<?php echo $designation;?>bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo $designation;?>jquery/jquery-3.4.1.js"></script>
<script src="<?php echo $designation;?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $designation;?>js/bootstrap.min.js"></script>
<script src="<?php echo $designation;?>font-awesome/js/all.min.js"></script>
<script src="<?php echo $designation;?>templates-design/js/sb-admin-2.min.js"></script>
<script src="<?php echo $designation;?>bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo $designation;?>js/jquery.validate.min.js"></script>
<script src="<?php echo $designation;?>datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $designation;?>datatables/datatables.bootstrap.min.js"></script>
<script src="<?php echo $designation;?>js/function-tri.js"></script>
<script>
$(document).ready(function() {
  $('#erTable').DataTable({
  });
});
$(document).ready(function(){
  $('#InputPassword a').on('click', function(event){
    event.preventDefault();
    if ($('#InputPassword input').attr("type") == "text") {
      $("#InputPassword input").attr("type", "password");
      $("#icon").addClass("fa-eye-slash");
      $("#icon").removeClass("fa-eye");
    }else if ($('#InputPassword input').attr("type") == "password") {
      $("#InputPassword input").attr("type", "text");
      $("#icon").removeClass("fa-eye-slash");
      $("#icon").addClass("fa-eye");
    }
  });
});
function selectData(values){
  var divider =   document.getElementById('paymentBlock');
  var paypal = document.getElementById('paymentPaypal');
  var ipaymu = document.getElementById('paymentIpaymu');
  var bankAccount = document.getElementById('paymentBank');
  var inputbankAccount = document.getElementById('id_bankAccount');
  var inputpaypal = document.getElementById('id_paymentPaypal');
  var inputipaymu = document.getElementById('id_paymentIpaymu');
if (values=="ipaymu") {
    divider.style.display='block';
    ipaymu.style.display='block';
    inputipaymu.required='true';
    bankAccount.style.display='none';
    inputbankAccount.required=false;
  }else if (values == "accountbank") {
    divider.style.display='block';
    ipaymu.style.display='none';
    bankAccount.style.display='block';
    inputbankAccount.required='true';
    inputipaymu.required=false;
  }else {
    divider.style.display='none';
    ipaymu.style.display='none';
    bankAccount.style.display='none';
    inputbankAccount.required=false;
    inputipaymu.required=false;
  }
}
function OnlyNumber(evt){
  var codeChar = (evt.which) ? evt.which : event.keyCode
  if (codeChar > 31 && (codeChar < 48 || codeChar > 57))
  return false;
  return true;
}
function OnlyAlphabetic (alp){
  var AlphaChar = (alp.which) ? alp.which : event.keyCode
  if (AlphaChar > 31 && (AlphaChar < 65 || AlphaChar > 90) && (AlphaChar < 97 || AlphaChar > 122) && AlphaChar > 32)
  return false;
  return true;
}
function UsernameMixed (usr){
  var UsernameMix = (usr.which) ? usr.which : event.keyCode
  if (UsernameMix > 31 && (UsernameMix < 65 || UsernameMix > 90) && (UsernameMix < 97 || UsernameMix > 122) && (UsernameMix < 48 || UsernameMix > 57))
  return false;
  return true;
}
(function($){
  $(window).on('load', function(){
    $('#preload').fadeOut('5000',function(){
      $(this).hide();
    });
  });
})(jQuery);
function userType(type){
  var bankBlock = document.getElementById('displayHide');
  if (type == "Pembeli") {
    bankBlock.style.display='none';
  }else if (type == "Pedagang") {
    bankBlock.style.display='block';
  }else {
    bankBlock.style.display='none';
  }
}
</script>
<script type="text/javascript">
  function validation(){
    var password = document.getElementById('id_InputPassword');
    var repeatpassword = document.getElementById('id_RepeatPassword');
    if (password.value != repeatpassword.value) {
      repeatpassword.setCustomValidity('Password tidak cocok');
    }else{
      repeatpassword.setCustomValidity('');
    }
  }
</script>
</body>
</html>
