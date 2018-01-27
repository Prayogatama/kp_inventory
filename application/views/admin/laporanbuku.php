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
include 'backend/backend_buku.php';
 ?>

<div class="container">
  <section class="content">
    <!-- Your Page Content Here -->
    <div class="row">
      <div class="col-md-10 col-md-push-1 main">
        <div class="box">
          <div class="box-header">
            <div class="page-header">
              <h1>Daftar Buku</h1>
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
                  <th class="text-center">Id Buku</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">Pengarang</th>
                  <th class="text-center">Penerbit</th>
                  <th class="text-center">Tahun</th>
                  <th class="text-center">Stok</th>
                </tr>
                <?php for ($i=0; $i < $jumlahBuku; $i++) { ?>
                  <tr>
                    <td class="text-center"><?php echo $id_buku[$i]; ?></td>
                    <td class="text-center"><?php echo $judul[$i]; ?></td>
                    <td class="text-center"><?php echo $pengarang[$i]; ?></td>
                    <td class="text-center"><?php echo $penerbit[$i]; ?></td>
                    <td class="text-center"><?php echo $tahun[$i]; ?></td>
                    <td class="text-center"><?php echo $stok[$i]; ?></td>
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
