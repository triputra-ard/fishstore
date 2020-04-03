<?php
$titlePage = "Detail Produk";
$currentpage = "shop";
include 'header.nav.all.php'; ?>
<br><br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper">

      <div class="card card-shadow bg-aquafish-detailfish">
        <div class="card-header">
          <h4>Detail Produk</h4>
        </div>
        <?php
        $id = decrypt_url($_GET['detail']);
        $sql = "SELECT * FROM fs_product a
        JOIN  fs_usertrader b ON a.id_seller = b.id_seller
        JOIN fs_species c ON a.id_species = c.id_species WHERE a.id_product = '$id' ";
        $mysql = mysql_query($sql) or die (mysql_error());
        while($detail = mysql_fetch_assoc($mysql)){
        ?>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 h-50">
              <center><img class="img-fluid" src="<?php echo  $linkProduct."".$detail['product_pict1']; ?>" style="background-color:rgb(81, 210, 175);"></center>
            </div>
            <div class="col-xl-6">
                  <div id="presentation_2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#presentation_2" data-slide-to="0" class="active"></li>
                      <li data-target="#presentation_2" data-slide-to="1"></li>
                      <li data-target="#presentation_2" data-slide-to="2"></li>
                      <li data-target="#presentation_2" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <center><img class="d-block img-fluid h-100" src="<?php echo  $linkProduct."".$detail['product_pict1']; ?>" height="350px" width="350px" alt="My Pict"></center>
                      </div>
                      <div class="carousel-item">
                        <center><img class="d-block img-fluid h-100" src="<?php echo  $linkProduct."".$detail['product_pict2']; ?>" height="350px" width="350px" alt="My Pict2"></center>
                      </div>
                      <div class="carousel-item">
                        <center><img class="d-block img-fluid h-100" src="<?php echo  $linkProduct."".$detail['product_pict3']; ?>" height="350px" width="350px" alt="My Pict3"></center>
                      </div>
                      <div class="carousel-item">
                        <center><img class="d-blockh img-fluid h-100" src="<?php echo  $linkProduct."".$detail['product_pict4']; ?>" height="350px" width="350px" alt="My Pict3"></center>
                      </div>
                    </div>
                  </div>

            </div>
          </div>
          <hr>
          <div class="col-xl-12 text-gray-100">
            <center><h3><b>Rp. <?php echo number_format($detail['product_price'],0,',','.'); ?> / ekor</b></h3></center>
          </div>
          <form action="control/process.cart.php?add" method="post">
            <input hidden type="text" name="id" value="<?php echo autokode("fs_cart","cart-id.".date('Y').".".date('m')."."); ?>">
            <input hidden type="text" name="id_seller" value="<?php echo $detail['id_seller']; ?>">
            <input hidden type="text" name="id_product" value="<?php echo $detail['id_product']; ?>">
          <div class="row">
            <div class="col-xl-6 text-gray-100">
              <h4>Kuantitas :</h4>
            </div>
            <div class="col-xl-6">
              <div class="form-group">
                <select class="custom-select" name="quantity" required>
                  <option value="">=Pilih=</option>
                  <?php
                  if ($detail['product_minpurchase'] == "10") {
                    $maximum = 31;
                    for ($min=9; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }elseif ($detail['product_minpurchase'] == "9") {
                    $maximum = 21;
                    for ($min=8; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }elseif ($detail['product_minpurchase'] == "8") {
                    $maximum = 21;
                    for ($min=7; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }elseif ($detail['product_minpurchase'] == "7") {
                    $maximum = 21;
                    for ($min=6; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }elseif ($detail['product_minpurchase'] == "6") {
                    $maximum = 21;
                    for ($min=5; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }elseif ($detail['product_minpurchase'] == "5") {
                    $maximum = 21;
                    for ($min=4; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }else {
                    $maximum = 11;
                    for ($min=1; $min < $maximum  ; $min++) {
                      echo '<option value="'.$min.'">'.$min.'</option>';
                    }
                  }?>
                </select>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <center>
              <a class="btn btn-primary btn-block <?php if($detail['product_stock'] == 0) echo "disabled"; elseif($detail['activation_status'] == "BLOCKED") echo "disabled"; ?>" href="#" data-toggle="modal" data-target="#askLogin" ><i class="fas fa-cart-plus"></i>
              Tambahkan ke keranjang <?php if($detail['activation_status'] == "BLOCKED") echo "(Pengguna ini diblokir sementara )"; ?></a> </center>
          </div>
        </form>
          <hr>
          <div class="row text-gray-100">
            <div class="col-xl-6">
              <p><?php echo $detail['product_description']; ?></p>
            </div>
            <!-- Species Section -->
            <div class="col-xl-6">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered text-gray-100" border="2px">
                  <thead>
                    <th colspan="2">Informasi Spesies [ <a class="text-gray-900" href="<?php echo $linkDetailSpecies;?><?php echo encrypt_url($detail['id_species']); ?>">Info Selengkapnya klik disini</a> ]</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama Spesies :</td>
                      <td><?php echo $detail['species_name']; ?></td>
                    </tr>
                    <tr>
                      <td class="alert alert-primary">Suhu Air Minimal :</td>
                      <td><b><i class="fas fa-temperature-low"></i> <?php echo $detail['species_temperatemin'];?>&deg; C</b></td>
                    </tr>
                    <tr>
                      <td class="alert alert-danger">Suhu Air Maksimal :</td>
                      <td><b><i class="fas fa-temperature-high"></i> <?php echo $detail['species_temperatemax'];?>&deg; C</b></td>
                    </tr>
                    <tr>
                      <td class="alert alert-success">Nama Pakan :</td>
                      <td><b><?php echo $detail['species_food'];?></b></td>
                    </tr>
                    <tr>
                      <td class="alert alert-success">Waktu pemberian pakan :</td>
                      <td><b><?php echo $detail['species_feed'];?>x Per <?php echo $detail['species_feed_time']; ?> </b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Species Accessories Section -->
            <div class="col-xl-12">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered text-gray-100" border="2px">
                  <thead>
                    <th colspan="2">Informasi Akuarium</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="alert alert-info">Aksesoris :</td>
                      <td><?php echo $detail['species_accessories']; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Species Section -->
          </div>
          <hr>
          <div class="row text-gray-100">
            <div class="col-xl-6">
              <div class="table-responsive">
                <table class="table table-striped table-bordered text-gray-100" border="2px">
                  <thead>
                    <th colspan="2">Informasi Ikan</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama Ikan :</td>
                      <td><?php echo $detail['product_name'];?></td>
                    </tr>
                    <tr>
                      <td>Ukuran Ikan :</td>
                      <td><?php echo $detail['product_size'];?> <?php echo $detail['product_sizetype'];?></td>
                    </tr>
                    <tr>
                      <td>Jumlah Stok tersedia :</td>
                      <td><?php if($detail['product_stock'] == 0) echo "Stok habis"; else echo $detail['product_stock'];?></td>
                    </tr>
                    <tr>
                      <td>Ikan yang terjual :</td>
                      <td><?php if($detail['product_sales'] == NULL ) echo "Belum terjual"; else  echo $detail['product_sales'];?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="table-responsive">
                <table class="table table-striped table-hover text-gray-100" border="3px">
                  <thead>
                    <th colspan="2">Informasi penjual</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="2"><center><img class="rounded-circle" src="<?php echo  $linkProfile."".$detail['picture']; ?>" height="145px" width="130px" alt="<?php echo $detail['username']; ?>">
                        <br><h4>Toko <?php echo $detail['name']; ?></h4><center></td>
                    </tr>
                    <tr>
                      <td>Alamat :</td>
                      <?php
                      $id = $detail['id_seller'];
                      $sqlseller = "SELECT * FROM fs_locationseller WHERE id_seller = '$id'";
                      $mysqlseller = mysql_query($sqlseller);
                      $catch = mysql_fetch_assoc($mysqlseller);

                      $provinsi = $catch['id_locationprovince'];
                      $region = $catch['id_locationregion'];
                      $kecamatan = $catch['id_locationdistrict'];

                      $sqladdress = "SELECT * FROM fs_locationseller a
                        LEFT JOIN fs_province b ON a.id_locationprovince = b.location_province
                        LEFT JOIN fs_region c ON a.id_locationregion = c.location_countycity
                        LEFT JOIN fs_district d ON a.id_locationdistrict = d.location_district
                        WHERE b.location_province = '$provinsi'
                        AND c.location_province = '$provinsi' AND c.location_countycity = '$region'
                        AND d.location_province = '$provinsi' AND d.location_countycity = '$region' AND d.location_district = '$kecamatan'
                        AND a.id_seller = '$id'";

                      $myqladdress = mysql_query($sqladdress) or die (mysql_error());
                      while ($getaddress= mysql_fetch_assoc($myqladdress)) {
                       ?>
                      <td><?php echo $getaddress['location_other']; ?>, <?php echo $getaddress['district_name']; ?>
                        , <?php echo $getaddress['region_name']; ?>, <?php echo $getaddress['province_name']; ?></td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td>Penjual :</td>
                      <td><?php echo $detail['name'];?>(<?php echo $detail['username'];?>)</td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                      <td><?php echo $detail['email'];?></td>
                    </tr>
                    <tr>
                      <td>Nomor Telepon :</td>
                      <td><?php echo $detail['phone_number'];?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="table-responsive">
              <table class="table table-border text-gray-100">
                <thead>
                  <th colspan="3"><center><i class="fas fa-grin-stars"></i> Ulasan dari pembeli lain <i class="fas fa-grin-stars"></i></center></th>
                </thead>
                <tbody>
                  <?php
                  $id_product = $detail['id_product'];
                  $sqlreview = "SELECT a.id_product,a.id_user,a.review_type,a.review_description,a.review_date,b.name as user_name,b.username FROM fs_reviewuser a
                  JOIN fs_userbuyer b ON a.id_user = b.id_user
                   WHERE a.id_product = '$id_product'";
                  $mysqlreview = mysql_query($sqlreview);?>
                  <?php if (mysql_num_rows($mysqlreview) === 0): ?>
                    <tr>
                      <td><p class="text-center">Belum ada yang ulas nih, jadi yang pertama dong <i class="far fa-grin-wink"></i> </p></td>
                    </tr>
                  <?php else: ?>
                    <?php while ($review = mysql_fetch_assoc($mysqlreview)) {
                      $currentdate = $review['review_date'];

                      $localdate = strtotime($currentdate);

                      $datenew = date("D-m-Y H:i:s:a",$localdate);
                     ?>
                    <tr>
                      <td><?php echo $review['username'];?>(<?php echo $review['user_name']; ?>)</td>
                      <td><b><?php echo $review['review_type']; ?></b></td>
                      <td><?php echo $review['review_description']; ?>(Pada : <?php echo $datenew; ?>)</td>
                    </tr>
                  <?php } ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
<?php } ?>
</div>
<?php
include 'view_home/modal.login.php';
include 'footer.nav.all.php'; ?>
