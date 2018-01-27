<?php $no=0 ?>
<!-- index pengiriman -->
<table border="1">
  <tr>
    <td>No</td>
    <!-- <td>Id Pengiriman</td> -->
    <td>Id Transaksi</td>
    <td>Tanggal Pengiriman</td>
  </tr>
  <?php foreach ($pengiriman_brg as $inputpengiriman):?>
    <tr>
      <td class="text-center"><?php echo ++$no?></td>
      <td class="text-center"><?php echo $inputpengiriman->id_pengiriman?></td>
      <td class="text-center"><?php echo $inputpengiriman->id_transaksi?></td>
      <td class="text-center"><?php echo $inputpengiriman->tgl_pengiriman?></td>
    </tr>
  <?php endforeach; ?>
</table>
