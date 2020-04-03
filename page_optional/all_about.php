<?php
$titlePage="Tentang Pengembang";
include 'header.nav.optional.php';
include 'model/modal.version.php';
?>
<br><br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper">

  <div class="container">
    <div class="card shadow mb-12 animated fadeInDownBig">
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold text-gray-100 text-center">Tentang Pengembang</h6>
      </div>
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="table-responsive">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <img alt="Tri Putra" src="../assets/img/triProfile.jpg" class="rounded-circle" width="200px" height="225px">
                    </td>
                    <td>
                      <div class="card border-bottom-info mb-8 lg-4">
                        <div class="card-body">
                          <h3 class="text-gray-900 text-center">Tri Putra Ardiyansah [2015141048]</h3><br>
                            <h5>Program Studi Teknik Informatika - Fakultas Teknik</h5><br>
                            <h5>Universitas Pamulang</h5>
                            <hr>
                            <p>Aplikasi penjualan dan pembelian ikan hias.</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="card shadow mb-12 animated fadeInDownBig">
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold text-gray-100 ">Versi Aplikasi</h6>
      </div>
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="table-responsive">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <div class="card border-left-primary mb-8">
                          <div class="card-body">
                            <h5 class="text-gray-900"><?php echo $versionName; echo $versionNumber; ?><a href="#" title="Lihat informasi riwayat pembaruan" data-target="#versionhistory" data-toggle="modal"><i class="fas fa-share"></i> </a> </h5>
                            <p><?php echo $versionDescription; ?></p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="card border-left-primary mb-8">
                          <div class="card-body">
                            <h5 class="text-gray-900"><?php echo $uxName; echo $uxNumber; ?></h5>
                            <p><?php echo $uxDescription; ?></p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

</div>
<?php include 'footer.nav.optional.php'; ?>
