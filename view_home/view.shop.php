<?php if (isset($_GET['search'])):
  $search = $_GET['search'];
  $setpage = 'search='.$search;
  $paging = 3;
  $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
  $prev = $pages - 1;
  $next = $pages + 1;
  $sqlresultsearch = "SELECT * FROM fs_product WHERE product_name LIKE '%$search%'";
  $resultquerysearch = mysql_query($sqlresultsearch);
  $totalpagesearch = mysql_num_rows($resultquerysearch);
  $pagination = ceil($totalpagesearch/$paging);

  $sql2 = "SELECT * FROM fs_product a
  JOIN fs_species b ON a.id_species = b.id_species
  JOIN fs_usertrader c ON a.id_seller = c.id_seller
  WHERE a.product_name LIKE '%$search%' LIMIT $start, $paging";
  $mysql2 = mysql_query($sql2);
  if (mysql_num_rows($mysql2) === 0): ?>
     <h4 class="text-center text-gray-100">Ups.. Ikan yang kamu cari gak ada nih. Coba lagi ya <i class="fas fa-smile-wink"></i> </h4>
   <?php else: ?>
  <div class="row">
  <?php
  while ($shop = mysql_fetch_assoc($mysql2)) {
   ?>
   <div class="col-lg-4">
     <div class="table-responsive">
       <table>
         <tbody>
           <td>
             <div class="card shadow mb-4">
               <div class="card-header py-3 bg-info">
                 <h6 class="m-0 font-weight-bold text-white"><?php echo $shop['product_name']; ?> (<?php echo $shop['species_name']; ?>)</h6>
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
<?php endif; ?>

<?php else: ?>
  <div class="row">
  <?php
  $setpage = '';
  $paging = 3;
  $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
  $prev = $pages - 1;
  $next = $pages + 1;
  $sqlresult = "SELECT * FROM fs_product";
  $resultquery = mysql_query($sqlresult);
  $totalpage = mysql_num_rows($resultquery);
  $pagination = ceil($totalpage/$paging);
  $sql1 = "SELECT * FROM fs_product a
  JOIN fs_species b ON a.id_species = b.id_species
  JOIN fs_usertrader c ON a.id_seller = c.id_seller
  LIMIT $start, $paging
  ";
  $mysql1 = mysql_query($sql1);
  while ($shop = mysql_fetch_assoc($mysql1)) {
   ?>
   <div class="col-lg-4">
     <div class="table-responsive">
       <table>
         <tbody>
           <td>
             <div class="card shadow mb-4">
               <div class="card-header py-3 bg-info">
                 <h6 class="m-0 font-weight-bold text-white"><?php echo $shop['product_name']; ?> (<?php echo $shop['species_name']; ?>)</h6>
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
<?php endif; ?>
