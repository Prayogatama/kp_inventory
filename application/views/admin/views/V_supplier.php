<?php $no=0 ?>
<!-- index Supplier -->
<table border="1">
  <tr>
    <td>No</td>
    <td>Id Supplier</td>
    <td>Nama Supplier</td>
    <td>Alamat Supplier</td>
    <td>No Telepon</td>
    <td>Nama Instansi</td>
    <td>Id Barang</td>
  </tr>
  <?php foreach ($supplier as $inputsupplier):?>
    <tr>
      <td class="text-center"><?php echo ++$no?></td>
      <td class="text-center"><?php echo $inputsupplier->id_supplier?></td>
      <td class="text-center"><?php echo $inputsupplier->nama_supplier?></td>
      <td class="text-center"><?php echo $inputsupplier->alamat_supplier?></td>
      <td class="text-center"><?php echo $inputsupplier->no_telp?></td>
      <td class="text-center"><?php echo $inputsupplier->nama_instansi?></td>
      <td class="text-center"><?php echo $inputsupplier->id_barang?></td>
    </tr>
  <?php endforeach; ?>
</table>
