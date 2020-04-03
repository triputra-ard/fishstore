<?php if (isset($_GET['home'])): ?>
  <!-- Section Home -->
<div class="card card-shadow transparent">
  <div class="card-body">
    <div class="row">
      <?php
      $setpage = 'home';
      $paging = 6;
      $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
      $prev = $pages - 1;
      $next = $pages + 1;
      $sqlresult = "SELECT * FROM fs_species";
      $resultquery = mysql_query($sqlresult);
      $totalpage = mysql_num_rows($resultquery);
      $pagination = ceil($totalpage/$paging);
      $sql1 = "SELECT now.id_species, now.species_name, now.species_latin,
         now.species_temperatemin, now.species_temperatemax, now.species_food,
         now.species_feed, now.species_feed_time,
         now.species_created, now.species_edited, now.species_added,
         a.name as creator, b.name as editor,
         c.admin_name as creatorowner, d.admin_name as editorowner
         FROM fs_species now
        LEFT JOIN fs_usertrader a ON now.species_created = a.id_seller
        LEFT JOIN fs_usertrader b ON now.species_edited = b.id_seller
        LEFT JOIN administrator c ON now.species_created = c.id_admin
        LEFT JOIN administrator d ON now.species_edited = d.id_admin
      LIMIT $start, $paging
      ";
      $mysql1 = mysql_query($sql1);
      while ($species = mysql_fetch_assoc($mysql1)) {
       ?>
         <div class="col-xl-4 mb-6 py-2">
          <a href="<?php echo $linkDetailSpecies.encrypt_url($species['id_species']); ?>" title="Klik untuk info selengkapnya">
           <div class="card border-left-info">
             <div class="card-body">
               <div class="row no-gutters align-item-center">
                 <div class="col-mr-2">
                   <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <?php echo $species['species_name']; ?>
                   </div>
                   <div class="text-xs font-weight-bold text-success">
                     dibuat oleh : <?php echo $species['creator']; echo $species['creatorowner']; ?>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           </a>
         </div>


     <?php } ?>
     <?php include '../page_include/pagination.php'; ?>
    </div>
  </div>
</div>
  <!-- Section Home -->
<?php elseif (isset($_GET['search'])): ?>
  <!-- Section search -->
<div id="preload"></div>
<div class="card card-shadow transparent">
  <div class="card-body">
    <div class="row">
      <?php
      $search = $_GET['search'];
      $setpage = 'search='.$search;
      $paging = 6;
      $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
      $prev = $pages - 1;
      $next = $pages + 1;
      $sqlresult = "SELECT * FROM fs_species WHERE species_name LIKE '%$search%'";
      $resultquery = mysql_query($sqlresult);
      $totalpage = mysql_num_rows($resultquery);
      $pagination = ceil($totalpage/$paging);
      $sql1 = "SELECT now.id_species, now.species_name, now.species_latin,
         now.species_temperatemin, now.species_temperatemax, now.species_food,
         now.species_feed, now.species_feed_time,
         now.species_created, now.species_edited, now.species_added, a.name as creator, b.name as editor, c.admin_name as creatorowner, d.admin_name as editorowner
         FROM fs_species now
        LEFT JOIN fs_usertrader a ON now.species_created = a.id_seller
        LEFT JOIN fs_usertrader b ON now.species_edited = b.id_seller
        LEFT JOIN administrator c ON now.species_created = c.id_admin
        LEFT JOIN administrator d ON now.species_edited = d.id_admin
        WHERE now.species_name LIKE '%$search%'
      LIMIT $start, $paging
      ";
      $mysql1 = mysql_query($sql1);?>
      <?php if (mysql_num_rows($mysql1) === 0): ?>
        <div class="col-xl-6 offset-xl-3">
          <h4 class="text-white">Enggak nemu nih.. tenang coba lagi nanti yaa..</h4>
        </div><br>
      <?php else: ?>
      <?php while ($species = mysql_fetch_assoc($mysql1)) {
         ?>
           <div class="col-xl-4 mb-6 py-2">
            <a href="<?php echo $linkDetailSpecies.encrypt_url($species['id_species']); ?>" title="Klik untuk info selengkapnya">
             <div class="card border-left-info">
               <div class="card-body">
                 <div class="row no-gutters align-item-center">
                   <div class="col-mr-2">
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php echo $species['species_name']; ?>
                     </div>
                     <div class="text-xs font-weight-bold text-success">
                       dibuat oleh : <?php echo $species['creator']; echo $species['creatorowner']; ?>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             </a>
           </div>
       <?php } ?>
       <?php include '../page_include/pagination.php'; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
  <!-- Section search -->
<?php endif; ?>
