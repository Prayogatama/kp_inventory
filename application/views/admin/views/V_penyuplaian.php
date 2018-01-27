<?php $no=0 ?>
<!-- index penyuplaian -->
<table border="1">
  <tr>
    <td>No</td>
    <td>Id Penyuplaian</td>
    <td>Id Supplier</td>
    <td>Jumlah</td>
    <td>Tgl Pembelian</td>
    <td>Total Bayar</td>
  </tr>
  <?php foreach ($penyuplaian as $inputpenyuplaian):?>
    <tr>
      <td class="text-center"><?php echo ++$no?></td>
      <td class="text-center"><?php echo $inputpenyuplaian->id_penyuplaian?></td>
      <td class="text-center"><?php echo $inputpenyuplaian->id_supplier?></td>
      <td class="text-center"><?php echo $inputpenyuplaian->jumlah?></td>
      <td class="text-center"><?php echo $inputpenyuplaian->tgl_pembelian?></td>
      <td class="text-center"><?php echo $inputpenyuplaian->total_bayar?></td>
    </tr>
  <?php endforeach; ?>
</table>
