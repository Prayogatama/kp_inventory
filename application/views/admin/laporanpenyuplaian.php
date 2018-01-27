<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Mitra Rekatama</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css')?>">

</head>
<body class="hold-transition skin-black sidebar-mini">

  <!-- ketiga -->
  <div class="modal fade" id="modal_edit_penyuplaian" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_edit_penyuplaian"></h4>
        </div>
        <form class="" action="<?php echo base_url('admin/update_penyuplaian')?>" method="post">
          <div class="modal-body">
            <input type="hidden" id="id_penyuplaian" name="id_penyuplaian" value="">
            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" placeholder="" name="jumlah">
            </div>
            <div class="form-group">
              <label for="">Tanggal</label>
              <input type="date" class="form-control" id="tgl_pembelian" placeholder="" name="tgl_pembelian">
            </div>
            <div class="form-group">
              <label for="">Total Pembayaran</label>
              <input type="number" class="form-control" id="total_bayar" placeholder="" name="total_bayar">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('/dasboard')?>" class="logo">
      <span class="logo-mini"><img src="" alt="" />I</span>
      <span class="logo-lg"><b>Inventory</b>Mitra Rekatama</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <div class="navbar-form">
              <div class="form-group">
                <a href="<?php echo base_url('auth/logout')?>" class="btn btn-default">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-industry"></i><span>Karyawan</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/daftarkaryawan')?>">Daftar Karyawan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-dropbox"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/inputbarang')?>">Input Barang</a></li>
            <li class=""><a href="<?php echo base_url('/daftarbarang')?>">Daftar Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-refresh"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/inputsupplier')?>">Input Supplier</a></li>
            <li class=""><a href="<?php echo base_url('/daftarsupplier')?>">Daftar Supplier</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href=">#"><i class="fa fa-truck"></i> <span>Pengiriman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/daftarpengiriman')?>">Daftar Pengiriman</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-send"></i> <span>Penyuplaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/inputpenyuplaian')?>">Input Penyuplaian</a></li>
            <li class=""><a href="<?php echo base_url('/daftarpenyuplaian')?>">Daftar Penyuplaian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-print"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('/laporankaryawan')?>">Karyawan</a></li>
            <li class=""><a href="<?php echo base_url('/Laporanbarang')?>">Barang</a></li>
            <li class=""><a href="<?php echo base_url('/laporansupplier')?>">Supplier</a></li>
            <li class=""><a href="<?php echo base_url('/laporanpengiriman')?>">Pengiriman</a></li>
            <li class=""><a href="<?php echo base_url('/laporanpenyuplaian')?>">Penyuplaian</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-sm-12 col-md-12 main">
          <div class="box">
            <!-- .box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tanggal Pembelian</th>
                    <th class="text-center">Total Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($penyuplaian as $inputpenyuplaian):?>
                    <tr>
                      <td class="text-left"><?php echo $inputpenyuplaian->jumlah?></td>
                      <td class="text-left"><?php echo $inputpenyuplaian->tgl_pembelian?></td>
                      <td class="text-left"><?php echo $inputpenyuplaian->total_bayar?></td>

                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            </div>
            <!-- .box-body -->
          </div>
          <!-- .box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Read, Lead, Succeed!
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Company</a>.</strong>
  </footer>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js')?>"></script>

<!-- <script src="<?php echo base_url('assets\js\dataTables.bootstrap.js')?>"></script> -->

<!-- <script src="<?php echo base_url('assets\js\jquery.dataTables.js')?>"></script> -->

<script type="text/javascript">
  window.onload=function() {
    window.print();
  }
</script>

<!-- keempat -->
<script type="text/javascript">


  function edit_penyuplaian(id_penyuplaian) {
    $.ajax({
      type: 'get',
      url : '<?php echo base_url('admin/edit_penyuplaian?id_penyuplaian=')?>'+id_penyuplaian,
      success: function(data) {
        $response = $(data);
        // ambil data dari url admin/edit_barang?id_barang=(sekian)
        var id_penyuplaian = $response.filter('#id_penyuplaian').text();
        var id_supplier = $response.filter('#id_supplier').text();
        var jumlah = $response.filter('#jumlah').text();
        var tgl_pembelian = $response.filter('#tgl_pembelian').text();
        var total_bayar = $response.filter('#total_bayar').text();
        // nampilkan ke modal
        $('#id_penyuplaian').val(id_penyuplaian);
        $('#id_supplier').val(id_supplier);
        $('#jumlah').val(jumlah);
        $('#tgl_pembelian').val(tgl_pembelian);
        $('#total_bayar').val(total_bayar);
        $('#modal_edit_penyuplaian').modal('show');
      }
    });
  }
</script>
</body>
</html>
