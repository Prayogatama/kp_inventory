<?php $no=0 ?>
<!-- index barang -->
<table border="1">
  <tr>
    <td>No</td>
    <td>Nama Barang</td>
    <td>Keterangan</td>
    <td>Jenis Barang</td>
    <td>Harga Barang</td>
    <td>Stok Barang</td>
  </tr>
  <?php foreach ($barang as $inputbarang):?>
    <tr>
      <td class="text-center"><?php echo ++$no?></td>
      <td class="text-center"><?php echo $inputbarang->id_barang?></td>
      <td class="text-center"><?php echo $inputbarang->nama_barang?></td>
      <td class="text-center"><?php echo $inputbarang->keterangan_barang?></td>
      <td class="text-center"><?php echo $inputbarang->jenis_barang?></td>
      <td class="text-center"><?php echo $inputbarang->harga_barang?></td>
      <td class="text-center"><?php echo $inputbarang->stok_barang?></td>
    </tr>
  <?php endforeach; ?>
</table>
