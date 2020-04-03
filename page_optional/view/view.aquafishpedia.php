<div class="table-responsive">
  <table id="aquafishpedia" class="table table-border" border="2px">
    <thead>
      <th>Nama Spesies</th>
      <th>Nama Latin</th>
      <th>Suhu Air</th>
      <th>Nama Pakan</th>
      <th>Pemberian pakan</th>
      <th>Dibuat Oleh</th>
      <th>Terakhir Diedit</th>
      <?php
      if (@$_SESSION[userType] == "Pedagang") {
      echo "<th>Aksi</th>";
    }
       ?>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT now.id_species, now.species_name, now.species_latin,
         now.species_temperatemin, now.species_temperatemax, now.species_food,
         now.species_feed, now.species_feed_time,
         now.species_created, now.species_edited, now.species_added, a.name as creator, b.name as editor, c.admin_name as creatorowner, d.admin_name as editorowner
         FROM fs_species now
        LEFT JOIN fs_usertrader a ON now.species_created = a.id_seller
        LEFT JOIN fs_usertrader b ON now.species_edited = b.id_seller
        LEFT JOIN administrator c ON now.species_created = c.id_admin
        LEFT JOIN administrator d ON now.species_edited = d.id_admin";
      $mysql = mysql_query($sql);
      while ($read = mysql_fetch_assoc($mysql)) {
       ?>
      <tr>
        <td><a href="<?php echo $linkDetailSpecies.encrypt_url($read['id_species']); ?>" title="Klik untuk info selengkapnya"><?php echo $read['species_name']; ?> <i class="fas fa-share-square"></i></a></td>
        <td><?php echo $read['species_latin']; ?></td>
        <td><i class="fas fa-temperature-low"></i>Min = <?php echo $read['species_temperatemin']; ?>&deg;C | <i class="fas fa-temperature-high"></i>Max = <?php echo $read['species_temperatemax']; ?>&deg;C</td>
        <td><?php echo $read['species_food']; ?></td>
        <td><?php echo $read['species_feed']; ?>x Per : <?php echo $read['species_feed_time']; ?></td>
        <td><?php echo $read['creator']; echo $read['creatorowner']; ?></td>
        <td><?php echo $read['editor']; echo $read['editorowner'];?> - <?php
        $current_time = $read['species_added'];
        $replace_time = strtotime($current_time);

        $timestamp = date("d-M-Y H:I:s", $replace_time);
         echo $timestamp;?></td>
        <?php
        if(@$_SESSION[userType] == "Pedagang") {
          echo '<td><a href="'.$linkUserEditor.encrypt_url($read['id_species']).'" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a></td>';
          }?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
