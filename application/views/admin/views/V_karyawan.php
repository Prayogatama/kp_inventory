<?php $no=0 ?>
<!-- index karyawan -->
<table border="1">
  <tr>
    <td>No</td>
    <td>Id Karyawan</td>
    <td>Nama</td>
    <td>JK</td>
    <td>Alamat</td>
    <td>Email</td>
    <td>No Telp</td>
    <td>Id Jabatan</td>
  </tr>
  <?php foreach ($karyawan as $inputkaryawan):?>
    <tr>
      <td class="text-center"><?php echo ++$no?></td>
      <td class="text-center"><?php echo $inputkaryawan->id_karyawan?></td>
      <td class="text-center"><?php echo $inputkaryawan->nama?></td>
      <td class="text-center"><?php echo $inputkaryawan->jenis_kelamin?></td>
      <td class="text-center"><?php echo $inputkaryawan->alamat?></td>
      <td class="text-center"><?php echo $inputkaryawan->email?></td>
      <td class="text-center"><?php echo $inputkaryawan->no_telp?></td>
      <td class="text-center"><?php echo $inputkaryawan->id_jabatan?></td>
    </tr>
  <?php endforeach; ?>
</table>
