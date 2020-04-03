<?php
$titlePage = "Admin Login";
require_once 'header.php'; ?>
<body class="bg-gradient-sky-blue">
  <div class="container">
    <br><br>
    <?php include 'eror.code.php'; ?>
        <div class="col-xl-6 offset-xl-3">
          <div class="card 0-hidden border-0 transparent">
            <div class="row">
              <div class="col-lg-12"><center>
                <img src="../assets/img/logoaqua.png" class="circle" height="100px" width="100px" alt=""><br>
              <h4 class="text-gray-100">ADMINISTRATOR</h4></center>
              </div>
              <div class="col-lg-12">
                <div class="card-body">
                  <form class="user" action="control/process.loginadmin.php" method="post">
                    <center><label for="InputEmailAdmin" class="text-center text-gray-100 text-lg">USER ID</label>
                    <div class="form-group input-group form-label-group">
                      <div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i> </span></div>
                      <input name="username" type="text" class="form-control form-control-user" id="InputEmailAdmin" required  placeholder="Masukkan username" onkeypress="return OnlyAlphabetic(event)">
                    </div>
                  </div>
                  <label for="InputPasswordAdmin" class="text-center text-gray-100 text-lg">Password</label>
                    <div class="form-group input-group">
                      <div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i> </span></div>
                      <input name="password" type="password" required class="form-control form-control-user" placeholder="Password" id="InputPasswordAdmin">
                    </div>
                  </div>
                  <hr>
                  <button type="submit" class="btn btn-rounded btn-block btn-success">Masuk</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>
</body>
<?php require_once 'footer.php'; ?>
