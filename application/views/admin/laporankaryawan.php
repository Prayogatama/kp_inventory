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
  <div class="modal fade" id="modal_edit_karyawan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_edit_karyawan"></h4>
        </div>
        <form class="" action="<?php echo base_url('admin/update_karyawan')?>" method="post">
          <div class="modal-body">
            <input type="hidden" id="id_karyawan" name="id_karyawan" value="">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="" name="nama">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" placeholder="" name="jenis_kelamin">
                  <option>L</option>
                  <option>P</option>
                </select>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="" name="alamat">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" id="email" placeholder="" name="email">
            </div>
            <div class="form-group">
              <label for="">Telepon</label>
              <input type="text" class="form-control" id="no_telp" placeholder="" name="no_telp">
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

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <!-- <th class="text-center">Id Karyawan</th> -->
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Telepon</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($karyawan as $inputkaryawan): ?>
                    <tr>
                      <td class="text-left"><?php echo $inputkaryawan->nama?></td>
                      <td class="text-left"><?php echo $inputkaryawan->jenis_kelamin?></td>
                      <td class="text-left"><?php echo $inputkaryawan->alamat?></td>
                      <td class="text-left"><?php echo $inputkaryawan->email?></td>
                      <td class="text-left"><?php echo $inputkaryawan->no_telp?></td>

                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

    function edit_karyawan(id_karyawan) {
      $.ajax({
        type: 'get',
        url : '<?php echo base_url('admin/edit_karyawan?id_karyawan=')?>'+id_karyawan,
        success: function(data) {
          $response = $(data);
          // ambil data dari url admin/edit_barang?id_barang=(sekian)
          var id_karyawan = $response.filter('#id_karyawan').text();
          var nama = $response.filter('#nama').text();
          var jenis_kelamin = $response.filter('#jenis_kelamin').text();
          var alamat = $response.filter('#alamat').text();
          var email = $response.filter('#email').text();
          var no_telp = $response.filter('#no_telp').text();
          // nampilkan ke modal
          $('#id_karyawan').val(id_karyawan);
          $('#nama').val(nama);
          $('#jenis_kelamin').val(jenis_kelamin);
          $('#alamat').val(alamat);
          $('#email').val(email);
          $('#no_telp').val(no_telp);
          $('#modal_edit_karyawan').modal('show');
        }
      });
    }
  </script>
  </body>
</html>
