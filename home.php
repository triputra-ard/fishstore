<?php
$titlePage = "BERANDA";
$currentpage = "home";
include 'header.nav.all.php'; ?>
<br><br><br><br>

<div id="page-wrapper">
  <!--Page wrapper-->
  <div class="container">
    <div class="row features animated fadeInDown">
      <div class="col-sm-6 col-md-5 col-lg-4 item animated flipInY delay-1s">
          <div class="card">
            <div class="card-body">
              <div class="box text-center"><img src="<?php echo $imageshopping; ?>" style="width:150px;height:150px;">
                  <h3 class="name">Belanja</h3>
                  <p class="description">Beli ikan hias favoritmu, lebih mudah dan cepat.</p>
                  <a href="home_shop" class="learn-more">Ayo belanja ikan ! »</a></div>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4 item animated flipInY delay-2s">
          <div class="card">
            <div class="card-body">
              <div class="box text-center"><img src="<?php echo $imagespecies; ?>" style="width:150px;height:150px;">
                  <h3 class="name">Cari spesies</h3>
                  <p class="description">Beli ikan hias berdasarkan spesies. Belanja ikan hias jadi mudah.</p>
                  <a href="home_shopspecies" class="learn-more">Cari tahu lebih lanjut »</a></div>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4 item animated flipInY delay-3s">
          <div class="card">
            <div class="card-body">
              <div class="box text-center"><img src="<?php echo $imagepopular; ?>" style="width:150px;height:150px;">
                  <h3 class="name">Paling populer</h3>
                  <p class="description">Beli ikan hias yang populer, berdasarkan pembelian</p>
                  <a href="home_shoppopular" class="learn-more">Selengkapnya »</a></div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="card animated fadeInDown delay-4s">
          <div class="card-body bg-sky-blue">
            <div id="presentation" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php
                $sqlspecies = "SELECT COUNT(*) From fs_product WHERE product_sales >= 5";
                $mysqlspecies = mysql_query($sqlspecies);
                $countspecies = mysql_result($mysqlspecies,0);
                for ($r = 0; $r < $countspecies ; $r++) {
                 ?>
                <li data-target="#presentation" data-slide-to="<?php echo $r; ?>" class="<?php if($r == 0 ) echo "active"; ?>"></li>
                  <?php } ?>
              </ol>

              <div class="carousel-inner">
                <?php
                $number = 0;
                $sql = "SELECT * FROM fs_product a
                JOIN fs_usertrader b ON a.id_seller = b.id_seller
                JOIN fs_species c ON a.id_species = c.id_species
                WHERE a.product_sales >= 5
                ";
                $mysql = mysql_query($sql); ?>
                <?php if (mysql_num_rows($mysql) === 0): ?>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $logoLink; ?>" height="340px" width="320px" alt="My Pict">
                    <div class="carousel-caption caption-fullwidth blue-transparent">
                      <h3><i class="fas fa-flask"></i> Spesies Populer : Belum ada nih, beli terus ikan hiasmu biar muncul disini<i class="fas fa-grin-wink"></i></h3>
                    </div>
                  </div>
                  <?php else:
                    while ($product = mysql_fetch_assoc($mysql)) {
                     ?>
                    <div class="carousel-item <?php if($number++ === 0) echo 'active'; ?>">
                      <img class="d-block w-100" src="<?php echo $linkProduct."".$product['product_pict1']; ?>" height="340px" width="320px" alt="My Pict">
                      <div class="carousel-caption caption-fullwidth blue-transparent">
                        <a href="home_detailproduct?detail=<?php echo encrypt_url($product['id_product']); ?>" class="text-gray-100">
                        <h3><i class="fas fa-flask"></i> Spesies Populer <i class="fas fa-flask"></i></h3>
                        <h4><?php echo $product['product_name']; ?>(<?php echo $product['species_name']; ?>)</h4>
                        <p>Rp.<?php echo number_format($product['product_price'],0,',','.');?></p></a>
                      </div>
                    </div>
                    <?php } ?>
                <?php endif; ?>
              </div>
              <a href="#presentation" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
              </a>
              <a href="#presentation" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card animated fadeInDown delay-4s">
          <div class="card-body bg-sky-blue">
            <div id="presentation_2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php
                $sqlpopular = "SELECT COUNT(*) From fs_product WHERE product_sales >= 1";
                $mysqlpopular = mysql_query($sqlpopular);
                $countpopular = mysql_result($mysqlpopular,0);
                for ($r = 0; $r < $countpopular ; $r++) {
                 ?>
                <li data-target="#presentation" data-slide-to="<?php echo $r; ?>" class="<?php if($r == 0 ) echo "active"; ?>"></li>
                  <?php } ?>
              </ol>
              <div class="carousel-inner">
                <?php
                $number = 0;
                $sql = "SELECT * FROM fs_product a
                JOIN fs_usertrader b ON a.id_seller = b.id_seller
                JOIN fs_species c ON a.id_species = c.id_species
                WHERE a.product_sales >= 1";
                $mysql = mysql_query($sql);
                ?>
                <?php if (mysql_num_rows($mysql) === 0): ?>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $logoLink; ?>" height="340px" width="320px" alt="My Pict">
                    <div class="carousel-caption caption-fullwidth blue-transparent">
                      <h3><i class="fas fa-star"></i> Ikan Populer : Belum ada nih, beli terus ikan hiasmu biar muncul disini<i class="fas fa-grin-wink"></i></h3>
                    </div>
                  </div>
                  <?php else:
                    while ($product = mysql_fetch_assoc($mysql)) {
                     ?>
                    <div class="carousel-item <?php if($number++ === 0) echo 'active'; ?>">
                      <img class="d-block w-100" src="<?php echo $linkProduct."".$product['product_pict1']; ?>" height="340px" width="320px" alt="My Pict">
                      <div class="carousel-caption caption-fullwidth blue-transparent">
                        <a href="home_detailproduct?detail=<?php echo encrypt_url($product['id_product']); ?>" class="text-gray-100">
                        <h3><i class="fas fa-star"></i> Ikan Populer <i class="fas fa-star"></i></h3>
                        <h4><?php echo $product['product_name']; ?>(<?php echo $product['species_name']; ?>)</h4>
                        <p>Rp.<?php echo number_format($product['product_price'],0,',','.');?></p></a>
                      </div>
                    </div>
                    <?php } ?>
                <?php endif; ?>
              </div>
              <a href="#presentation_2" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
              </a>
              <a href="#presentation_2" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="card animated fadeInDown delay-5s  bg-aquafish-detailfish">
    <div class="card-header bg-aquafish-newfish">
      <h3 class="text-center text-gray-100">IKAN HIAS BARU <br><small>Lengkapi koleksi ikan hias anda dengan koleksi ikan hias baru dari para penjual ikan hias kami !</small></h3>
    </div>
    <div class="card-body">
      <div class="col-xl-12">
        <div class="row">
          <?php
          $sql = "SELECT * FROM fs_product
          JOIN fs_usertrader ON fs_product.id_seller = fs_usertrader.id_seller
          JOIN fs_species ON fs_product.id_species = fs_species.id_species
          WHERE id_product = LAST_INSERT_ID()";
          $mysql = mysql_query($sql);
          while ($product = mysql_fetch_assoc($mysql)) {
           ?>
          <div class="col-xl-3">
            <div class="card">
              <div class="card-header">
                <a href="home_detailproduct?detail=<?php echo encrypt_url($product['id_product']); ?>" class="text-gray-900">
                <h4><?php echo $product['product_name']; ?> (<?php echo $product['species_name']; ?>)</h4></a>
              </div>
              <div class="card-body">
                <img class="w-100" src="<?php echo $linkProduct."".$product['product_pict1']; ?>" alt=""><br>
                <h4>Oleh : <?php echo $product['name']; ?></h4>
              </div>
              <div class="card-footer">
                <h5>Harga : Rp. <?php echo number_format($product['product_price'],0,',','.');?>/ekor</h5>
                <br>
                <a href="home_detailproduct?detail=<?php echo encrypt_url($product['id_product']);?>" class="btn btn-primary btn-block">Ketuk untuk info lengkap<i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <br>


</div>
<?php include 'footer.nav.all.php'; ?>
