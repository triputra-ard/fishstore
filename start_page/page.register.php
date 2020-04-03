<?php
$titlePage = "REGISTRASI";
require_once 'header.php'; ?>
<div id="preload"></div>
<body class="bg-gradient-success" style="background-repeat: no-repeat;">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-primary">
            <center><br><br><img src="../assets/img/logoaqua.png" height="250px" width="250px"><br>
              <h3 class="text-white text-center"> AQUAFISH.COM DAFTAR</h4></center>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1><i class="fas fa-user"></i>
                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
              </div>
              <form class="user" action="control/process.register?register" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input hidden type="text" name="id_user" value="<?php echo autokode("fs_userbuyer","AQUAFISH-U-".date('Y')."-".date('m').""); ?>">
                    <input hidden type="text" name="id_seller" value="<?php echo autokode("fs_usertrader","AQUAFISH-S-".date('Y')."-".date('m').""); ?>">
                    <label for="FirstName">Nama depan</label>
                    <input name="firstname" type="id_FirstName" class="form-control" id="id_FirstName" placeholder="Nama depan" required
                    onkeypress="return OnlyAlphabetic(event)">
                  </div>
                  <div class="col-sm-6">
                    <label for="id_LastName">Nama belakang</label>
                    <input name="lastname" type="text" class="form-control" id="id_LastName" placeholder="Nama belakang"
                    onkeypress="return OnlyAlphabetic(event)">
                  </div>
                </div>
                <label>Username</label>
                <div class="form-group input-group">
                  <div class="input-group"><div class="input-group-prepend"><span class="input-group-text">@</span></div>
                  <input name="username" type="text" class="form-control" id="id_UserName" placeholder="Username" required
                  onkeypress="return UsernameMixed(event)">
                </div>
              </div>
                <div class="form-group">
                  <label for="id_InputEmail">Alamat Email</label>
                  <input name="email" type="email" class="form-control" id="id_InputEmail" placeholder="Alamat email" required>
                </div>
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <div class="form-group">
                      <label for="id_phoneNumber">Nomor Telepon</label>
                      <input name="phones" type="text" class="form-control" value="" id="id_phoneNumber" required placeholder="Nomor Telepon"
                      onkeypress="return OnlyNumber(event);">
                    </div>
                  </div>
                  <div class="col-md-5 mb-3">
                    <div class="form-group">
                    <label for="id_typeUser">Tipe Pengguna</label>
                    <select name="usertype" class="custom-select d-block w-100" id="id_typeUser" name="UserType" required
                    onchange="return userType(this.value);">
                      <option value=""
                      onclick="document.getElementById('displayHide').style.display='none';">Pilih</option>
                      <option value="Pembeli">Pembeli</option>
                      <option value="Pedagang">Pedagang</option>
                    </select>
                  </div>
                </div>
              <div class="col-md-10 mb-3" id="displayHide" style="display:none">
                <div class="col-md-10 mb-3">
                  <div class="form-group">
                    <label for="id_onlinePay">Pilih metode pembayaran yang anda miliki.</label>
                    <select class="custom-select d-block w-100" name="Payment" id="id_onlinePay" onchange="return selectData(this.value);">
                      <option value="">Pilih akun pembayaran</option>
                      <option value="accountbank">Akun Bank</option>
                      <option value="ipaymu">iPaymu</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-10 mb-3" id="paymentBlock" style="display:none">
                    <div class="form-group" id="paymentBank" style="display:none">
                      <label for="id_bankAccount"><i class="fas fa-university"></i> Nomor Rekening Bank [Pedagang]</label>
                      <input name="bankaccount" type="text" class="form-control" name="bankAccount" id="id_bankAccount" placeholder="Nomor rekening">
                    </div>
                  <div class="form-group" id="paymentIpaymu" style="display:none">
                    <label for="id_paymentIpaymu"><i class="fas fa-wallet"></i>  Contoh : https://www.ipaymu.com/YourName</label>
                    <input name="onlinepay1" type="url" class="form-control" name="ipaymu" id="id_paymentIpaymu" placeholder="Akun iPayMu">
                  </div>
                </div>
              </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="id_InputPassword">Masukkan password</label>
                    <input name="password" type="password" class="form-control" id="id_InputPassword" placeholder="Password" required
                    onchange="validation()">
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="id_RepeatPassword">Masukkan ulang password</label>
                    <input name="repeatpassword" type="password" class="form-control" id="id_RepeatPassword" placeholder="Ulangi Password" required
                    onchange="validation()">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle"></i> Dengan mengklik tombol "DAFTAR" maka anda setuju dengan <a class="nolink" href="" data-toggle="modal" data-target="#modalAgree">persyaratan pengguna dan privasi</a> kami.</h6>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" name="register" value="Daftar">
              </form>
              <div class="col-md-12 text-center">
                <a href="login.user">Sudah punya akun ? masuk disini.</a>
              </div>
              <hr>
              <a href="../home" class="btn btn-default btn-block"><i class="fas fa-home"></i><span>Kembali ke beranda</span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include 'model/modal.agreement.php';
require_once 'footer.php'; ?>
