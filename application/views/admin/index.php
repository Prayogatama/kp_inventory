<!-- <?php
session_start();

  if (isset($_SESSION['username'])) {

  } else {

  }

 ?> -->

<?php foreach ($admin as $admin_item) { ?>
  <h1><?php echo  $admin_item['barang'] ?></h1>
  <p><?php echo $admin_item['barang'] ?></p>
<?php } ?>
