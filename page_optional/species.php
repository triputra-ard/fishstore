<?php
$titlePage = "AQUAFISHPEDIA";
include 'header.nav.optional.php'; ?>
<br><br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper">

  <div class="card card-shadow">
    <div class="card-header">
      <h4>Informasi Detail Spesies</h4>
    </div>
    <?php
      if (empty($_GET['detail'])) {

        header('location:'.$link404.'');
      }
      $decrypt = $_GET['detail'];
      $id = decrypt_url($decrypt);
      $sql = "SELECT now.id_species, now.species_name, now.species_latin,
         now.species_temperatemin, now.species_temperatemax, now.species_food,
         now.species_feed, now.species_feed_time, now.species_description,
         now.species_created, now.species_edited, now.species_added,
         now.species_accessories, now.species_feedprice, now.species_feedurl,
         a.name as creator, b.name as editor, c.admin_name as creatorowner, d.admin_name as editorowner
         FROM fs_species now
        LEFT JOIN fs_usertrader a ON now.species_created = a.id_seller
        LEFT JOIN fs_usertrader b ON now.species_edited = b.id_seller
        LEFT JOIN administrator c ON now.species_created = c.id_admin
        LEFT JOIN administrator d ON now.species_edited = d.id_admin
      Where now.id_species = '$id'";
      $mysql = mysql_query($sql);
      while ($wiki = mysql_fetch_assoc($mysql)) {
     ?>
    <div class="card-body">
      <div class="row">
        <div class="col-xl-12">
          <h3><?php echo $wiki['species_name']; ?> (<?php if($wiki['species_latin'] == NULL) echo "Nama tidak tersedia"; else echo $wiki['species_latin'];?>) &nbsp; <?php
          if(@$_SESSION[userType] == "Pedagang") {
            echo '<td><a href="'.$linkUserEditor.encrypt_url($wiki['id_species']).'" class="btn btn-default float-right"><i class="far fa-edit"></i>Sunting</a></td>';
            }?></h3><hr>
        </div>
        <div class="col-xl-12">
          <p><?php echo $wiki['species_description']; ?></p><br>
          <p><b>Dibuat oleh : <?php echo $wiki['creator']; echo $wiki['creatorowner'];?></b></p><br>
          <p><b>Diedit oleh : <?php echo $wiki['editor']; echo $wiki['editorowner'];?> (<?php echo $wiki['species_added'];?>)</b></p>
        </div>
      </div>
      <hr>
      <div class="col-xl-12">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <th colspan="2">Informasi Detail</th>
            </thead>
            <tbody>
              <tr>
                <td class="alert alert-primary">Suhu Air Minimal :</td>
                <td><b><i class="fas fa-temperature-low"></i> <?php echo $wiki['species_temperatemin'];?>&deg; C</b></td>
              </tr>
              <tr>
                <td class="alert alert-danger">Suhu Air Maksimal :</td>
                <td><b><i class="fas fa-temperature-high"></i> <?php echo $wiki['species_temperatemax'];?>&deg; C</b></td>
              </tr>
              <tr>
                <td class="alert alert-success">Nama Pakan :</td>
                <td><b><?php echo $wiki['species_food'];?></b></td>
              </tr>
              <tr>
                <td class="alert alert-success">Waktu pemberian pakan :</td>
                <td><b><?php echo $wiki['species_feed'];?>x Per <?php echo $wiki['species_feed_time']; ?> </b></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <th colspan="2">Informasi Opsional</th>
            </thead>
            <tbody>
              <tr>
                <td class="alert alert-info">Aksesoris Akuarium :</td>
                <td><?php echo $wiki['species_accessories']; ?></td>
              </tr>
              <tr>
                <td class="alert alert-primary">Kisaran harga pakan :</td>
                <td>
                  Rp. <?php echo number_format($wiki['species_feedprice'],0,'.',','); ?>
                  <a href="<?php echo $wiki['species_feedurl']; ?>">Lihat di toko daring</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

</div>
<?php include 'footer.nav.optional.php'; ?>
