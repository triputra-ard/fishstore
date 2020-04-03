<?php include 'header.id.php'; ?>
<body class="fishstore-flounder">
    <div>
      <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button fixed-top" style="background-color:rgba(42,154,127,0.42);">
        <div class="container">
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><i class="fas fa-fish text-white" style="font-size:34px;"></i></button>
          <h1 class="navbar-brand" href="#"><img src="<?php echo $logoLink; ?>" style="width:80px;height:80px;"></h1>
        <div class="collapse navbar-collapse" id="navcol-1" style="font-family:'Signika Negative', sans-serif;color:rgb(255,255,255);">
              <h3 href="navbar-brand">AQUAFISH.COM</h3>
              <ul class="nav navbar-nav mr-auto">
              <li class="nav-item" role="presentation"><a class="nav-link" href="home" style="color:rgb(255,255,255)"><b>Beranda</b></a></li>
              <li class="nav-item <?php if($currentpage=="shop") echo "active-now"; ?>" role="presentation"><a class="nav-link" href="home_shop"><b><i class="fas fa-shopping-cart"></i> Belanja </b></a></li>
              <li class="nav-item <?php if($currentpage=="species") echo "active-now"; ?>" role="presentation"><a class="nav-link" href="home_shopspecies"><b><i class="fas fa-search"></i> Cari spesies </b></a></li>
              <li class="nav-item <?php if($currentpage=="popular") echo "active-now"; ?>" role="presentation"><a class="nav-link" href="home_shoppopular"><b><i class="fas fa-star"></i> Paling populer </b></a></li>
              </ul>
              <span class="navbar-text actions">
              <a href="<?php echo $pageLogin; ?>" class="btn btn-light login" style="padding:8px 16px;font-size:21px;color:rgb(255,255,255);background-color:#11ff45;width:92,6875px;height:47px;"><strong>Masuk</strong></a>
              &nbsp;
              <a class="btn btn-light action-button" role="button" href="<?php echo $pageRegister; ?>" style="font-size:21px;"><strong>Daftar</strong></a>
              </span>
            </div>
          </div>
    </nav>
    </div>

<br>
