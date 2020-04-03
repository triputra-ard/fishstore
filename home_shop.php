<?php
$titlePage = "Belanja";
$currentpage = "shop";
include 'header.nav.all.php'; ?>
<br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper"><br>
<!--PAGE START-->
<div class="container">
  <div class="card shadow mb-12  bg-aquafish-detailfish">
    <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between bg-gradient-info">
        <h6 class="m-0 font-weight-bold text-lg text-gray-100">Beli Ikan</h6>
        <div class="col-md-6">
          <form action="home_shop" method="get">
            <div class="form-group input-group">
              <input class="form-control" type="text" name="search" <?php $search = isset($_GET['search']) ? (string)$_GET['search'] : '';?> placeholder="Ikan koi jepang" aria-label="Cari" onkeypress="return OnlyAlphabetic(event)"
              value="<?php echo $search; ?>">
              <div class="input-group-prepend">
                <button type="submit" class="btn btn-secondary"><i class="fas fa-search" style="font-size:12px"></i></button>
            </div>
            </div>
          </form>
      </div>
    </div>
    <div class="card-body">
      <?php include 'view_home/view.shop.php'; ?>
    </div>
  </div>
</div>
<!--PAGE END-->
<br></div>
<?php include 'footer.nav.all.php'; ?>
