<div class="col-sm-9">
<h2><small>CALON PESERTA</small></h2>
<hr>

<div class="form-group" align="right">
  <a href=""class="btn btn-primary" title="Edit"><span class="glyphicon glyphicon-print"></span> Cetak</a><br>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
         <h4>Data Calon Peserta</h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No Pendaftaran</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  include '../koneksi/koneksi.php';
                    $no=1;
                    $sql =mysqli_query($koneksi,"select * from calon_peserta");
                    while ($data= $sql->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['tempat_lahir']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td align="center">
                      <a href="?halaman=hal_calon_peserta&aksi=edit_calon_peserta&id=<?php echo $data ['no_pendaftar']; ?>" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                      <a href=""class="btn btn-danger" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                  </tr>
                  <?php }
                  ?>
                </tbody>
             </table>
         </div>
     </div>
  </div>
 </div>
