<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penyewaan Buku</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/skins/_all-skins.min.css">

</head>

<?php
include 'koneksi.php';
include 'backend/backend_anggota.php';
 ?>

<div class="container">
  <section class="content">

    <!-- Your Page Content Here -->
    <div class="row">
      <div class="col-sm-12 col-md-12 main">
          <div class="box">
          <div class="box-header">
            <div class="page-header">
              <h1>Daftar Anggota</h1>
            </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                </div>
              </div>
            </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th class="text-center">Id Peminjam</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Password</th>
                  <th class="text-center">Telepon</th>
                  <th class="text-center">Alamat</th>
                </tr>
                <?php for ($i=0; $i < $jumlahAnggota; $i++) { ?>
                  <tr>
                    <td class="text-center"><?php echo $id_anggota[$i]; ?></td>
                    <td class="text-center"><?php echo $nama[$i]; ?></td>
                    <td class="text-center"><?php echo $password_anggota[$i]; ?></td>
                    <td class="text-center"><?php echo $telepon[$i]; ?></td>
                    <td class="text-center"><?php echo $alamat[$i]; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
  window.onload=function() {
    window.print();
  }
</script>
