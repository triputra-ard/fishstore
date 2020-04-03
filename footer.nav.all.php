<!--
<div>
<nav class="navbar navbar-light navbar-expand-lg fixed-bottom d-lg-block d-xl-none" style="background-color:rgba(26, 214, 180);">
  <div class="container" style="font-family:'Signika Negative', sans-serif;color:rgb(255,255,255);">
      <div class="d-inline p-4 bg-primary"><a class="text-white" href="home" style="color:rgb(255,255,255)"><b>Beranda</b></a></div>
      <div class="d-inline p-4 bg-primary"><a class="text-white" href="home_shop"><b><center><i class="fas fa-shopping-cart"></i></center><span style="font-size:9px;"><?php if($currentpage=="shop") echo "Belanja"; ?></span> </b></a></div>
      <div class="d-inline p-4 bg-primary"><a class="text-white" href="home_shopspecies"><b><center><i class="fas fa-search"></i></center> <span style="font-size:9px;"><?php if($currentpage=="species") echo "Spesies"; ?></span></b></a></div>
      <div class="d-inline p-4 bg-primary"><a class="text-white" href="home_shoppopular"><b><center><i class="fas fa-star"></i></center><span style="font-size:9px;"><?php if($currentpage=="popular") echo "Populer"; ?></span> </b></a></div>
  </div>
</nav>
</div>End Mobile Navbar -->
<div class="footer-clean bg-pink" style="background-color:rgba(42,154,127);">
    <footer style="background-color:rgba(204,204,204,0);">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-4 col-md-3 item text-gray-100">
                  <h3>Untuk Pengembang</h3>
                  <ul>
                      <li><a href="<?php echo $linkDocumentation; ?>">Dokumentasi</a></li>
                      <li><a href="<?php echo $linkDevs; ?>">Pengembangan</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item text-gray-100" style="width:328px;">
                  <h3>Tentang</h3>
                  <ul>
                      <li><a href="<?php echo $linkAbout; ?>">Pengembang</a></li>
                      <li><a href="<?php echo $linkThirdparties; ?>">Aplikasi pihak ketiga</a></li>
                      <li><a href="<?php echo $linkLegal; ?>">Legalisasi</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item text-gray-100" style="width:328px;">
                  <h3>Bantuan & Saran</h3>
                  <ul>
                      <li><a href="<?php echo $linkHelp; ?>">Bantuan</a></li>
                      <li><a href="<?php echo $linkSuggestion; ?>">Saran</a></li>
                      <li><b><a href="<?php echo $linkSpecies; ?>">AQUAFISHpedia</a></b></li>
                  </ul>
              </div>
              <div class="col-md-3 item social text-gray-100 d-md-block d-none">
                <a href="<?php echo $linkGit; ?>"><i class="fab fa-github"></i></a>
                <a href="<?php echo $linkFacebook; ?>"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo $linkTwitter; ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo $linkInstagram; ?>"><i class="fab fa-instagram"></i></a>
                  <p class="copyright text-gray-100"
                      style="color:rgb(34,35,37);"><strong><?php echo $authorName; ?> © <?php echo $copyrightYear; ?> - <?php echo date('Y'); ?></strong></p>
              </div>
          </div>
      </div>
    </footer>
</div>
<?php include 'footer.id.php'; ?>
