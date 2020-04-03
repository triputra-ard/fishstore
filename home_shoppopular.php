<?php
$titlePage = "Ikan Populer";
$currentpage = "popular";
include 'header.nav.all.php'; ?>
<br><br><br><br>
<div id="preload"></div>
<div id="page-wrapper"><br>
<!--PAGE START-->
<div class="container">
  <div class="card shadow mb-12  bg-aquafish-detailfish">
    <div class="card-header py-3 d-flex flex-row align-item-right justify-content-between bg-gradient-info">
        <h6 class="m-0 font-weight-bold text-lg text-gray-100">Paling Populer</h6>
        <h6 class="m-0 font-weight-bold text-lg text-gray-100"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>
    </div>
    <a href="<?php echo $linkSpecies; ?>" class="animated zoomIn">
      <p class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Jangan sampe ikan hiasmu kedinginan "Cek disini"</p>
    </a>
    <div class="card-body">
      <div class="row">
      <?php
      $setpage = '';
      $paging = 6;
      $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
      $prev = $pages - 1;
      $next = $pages + 1;
      $sqlresult = "SELECT * FROM fs_product WHERE product_sales > 5";
      $resultquery = mysql_query($sqlresult);
      $totalpage = mysql_num_rows($resultquery);
      $pagination = ceil($totalpage/$paging);

      $sql1 = "SELECT * FROM fs_product a
      JOIN fs_species b ON a.id_species = b.id_species
      JOIN fs_usertrader c ON a.id_seller = c.id_seller
      WHERE a.product_sales > 5
      LIMIT $start, $paging
      ";
      $mysql1 = mysql_query($sql1) or die (mysql_error());
      while ($shop = mysql_fetch_assoc($mysql1)) {
       ?>
       <div class="col-lg-4">
         <div class="table-responsive">
           <table>
             <tbody>
               <td>
                 <div class="card shadow mb-4">
                   <div class="card-header py-3 bg-gold">
                     <h6 class="m-0 font-weight-bold text-white"><?php echo $shop['product_name']; ?> (Terjual <?php echo $shop['product_sales']; ?> x)</h6>
                   </div>
                   <div class="card-body">
                     <img src="<?php echo $linkProduct."".$shop['product_pict1']; ?>" width="250px" height="250px">
                   </div>
                   <div class="card-body">
                     <h5 class="m-0 font-weight-bold text-gray-900">Dijual oleh <b><?php echo $shop['name']; ?></b></h5><hr>
                     <p class="text-center">Rp.<?php echo number_format($shop['product_price'],0,',','.');?> /Ekor</p><br>
                     <div class="row">
                       <div class="col-lg-12">
                         <p class="text-center"><b>STOK TERSEDIA : <?php echo $shop['product_stock']; ?></b> </p>
                       </div>
                     </div>
                     <div class="col-lg-2">
                       <a href="home_detailproduct?detail=<?php echo encrypt_url($shop['id_product']);?>" class="btn btn-primary"><i class="fas fa-info"></i> Informasi Selengkapnya</a>
                     </div>
                   </div>
                 </div>
               </td>
             </tbody>
           </table>
         </div>
       </div>
    <?php } ?>
    </div>
    <?php include 'page_include/pagination.php'; ?>
    </div>
  </div>
</div>
<!--PAGE END-->
<br></div>
<?php
include 'footer.nav.all.php'; ?>
