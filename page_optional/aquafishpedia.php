<?php
$titlePage = "AQUAFISHPEDIA";
include 'header.nav.optional.php'; ?>
<br><br><br><br><br>
<div id="page-wrapper">

    <div class="card card-shadow transparent">
      <div class="card-header">
        <h4 class="text-center">AQUAFISHPEDIA(BETA)</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-4">
            <div class="alert alert-info animated bounceIn">
              <h5>Cari informasi mengenai pakan, suhu air, waktu pemberian pakan, aksesoris hingga harga pakan yang sesuai dengan ikan hias kamu</h5>
            </div>
          </div>
          <div class="col-xl-8">
            <form class="" action="aquafishpedia" method="get">
              <div class="row">
                <div class="form-group col-8">
                  <?php $search = isset($_GET['search']) ? (string)$_GET['search'] : '';?>
                  <input type="text" class="form-control" name="search" value="<?php echo $search; ?>" placeholder="Cari nama spesies">
                </div>
                <div class="form-group col-2">
                  <button type="submit" class="btn btn-primary btn-rounded"><i class="fas fa-search"></i> Cari </button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div><br>
    <?php include 'view/view.new.aquafishpedia.php'; ?>
</div>
<?php include 'footer.nav.optional.php'; ?>
