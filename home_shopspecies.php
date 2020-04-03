<?php
$titlePage = "Spesies";
$currentpage = "species";
include 'header.nav.all.php'; ?>
<br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper"><br>
<!--PAGE START-->
<div class="container">
  <div class="card shadow mb-12  bg-aquafish-detailfish">
    <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between bg-gradient-info">
        <h6 class="m-0 font-weight-bold text-lg text-gray-100">Cari Spesies <i class="fas fa-fish"></i>&nbsp;
        </h6>
          <div class="col-xl-6">
            <form action="home_shopspecies" method="get">
              <div class="form-group input-group">
              <select class="custom-select" name="search" id="id_speciesName">
                <option value="">Pilih Spesies</option>
                <?php
                $sql = "SELECT * FROM fs_species";
                $mysqlspecies = mysql_query($sql);
                while ($species = mysql_fetch_assoc($mysqlspecies)) {
                 ?>
                <option value="<?php echo encrypt_url($species['id_species']); ?>"><?php echo $species['species_name']; ?></option>
              <?php } ?>
              </select>
              <div class="input-group-append">
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
              </div>
            </div>
            </form>
          </div>
      </div>
      <a href="<?php echo $linkSpecies; ?>" class="animated zoomIn">
        <p class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">x</button>
          Ssst.. kamu bisa tahu makanan favorit ikan hias kamu loh "KLIK DISINI"</p>
      </a>
      <div class="card-body">
        <?php include 'view_home/view.shopspecies.php'; ?>
      </div>
    </div>
  </div>
</div>
<!--PAGE END-->
<br></div>
<?php
include 'footer.nav.all.php'; ?>
