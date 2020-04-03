<div class="footer-clean" style="background-color:rgba(42,154,127,0.42);">
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
              <div class="col-lg-3 item social text-gray-100"><a href="<?php echo $linkGit; ?>"><i class="fab fa-github"></i></a>
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
