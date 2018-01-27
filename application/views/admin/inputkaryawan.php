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

</head>
<body class="hold-transition skin-black sidebar-mini">
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
      <form class="" action="<?php echo base_url('admin/create_karyawan')?>" method="post">
        <div class="row">
          <div class="col-sm-12 col-md-12 main">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h2 class="box-title">Input Karyawan</h2>
                <div class="box-tools pull-right">
                  <button type="button" class="btn bg-light-blue btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div> <!-- /.box-tools -->
              </div> <!-- /.box-header -->
              <div class="box-body border-radius-none">
                <div class="row">
                  <div class="col-xs-12 tengah">
                    <h3>Karyawan</h3>
                  </div>
                </div>
                <div class="row rata-kanan-kiri">
                  <div class="sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
                    <div class="container">
                      <div class="row">
                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2" for="">Nama Karyawan</label>
                            <div class="col-md-5">
                              <input type="text" class="form-control" id="" placeholder="" required="true" name="nama">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2" for="">Jenis Kelamin</label>
                            <div class="col-md-5">
                              <select class="form-control">
                                <option>Pilih</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2" for="">Alamat</label>
                            <div class="col-md-5">
                              <input type="text" class="form-control" id="" placeholder="" required="true" name="alamat">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2" for="">Email</label>
                            <div class="col-md-5">
                              <input type="text" class="form-control" id="" placeholder="" required="true" name="email">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2" for="">Telepon</label>
                            <div class="col-md-5">
                              <input type="text" class="form-control" id="" placeholder="" required="true" name="no_telp">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5 col-md-push-6">
                            <button type="submit" class="btn btn-primary" name="simpan_buku">
                              Simpan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- /.box-body -->
            </div> <!-- /.box -->
          </div>
        </div>
      </form>
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
    <strong>Copyright &copy; 2017 <a href="#">Mitra Rekatama</a>.</strong>
  </footer>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js')?>"></script>
</body>
</html>
