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
  <!-- css tabel -->
  <link rel="stylesheet" href="<?php echo base_url('assets\css\dataTables.bootstrap.css')?>">

</head>
<body class="hold-transition skin-black sidebar-mini">

<!-- ketiga -->
<div class="modal fade" id="modal_edit_barang" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_edit_barang"></h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_barang')?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id_barang" name="id_barang" value="">
          <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" placeholder="" name="nama_barang">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" id="keterangan_barang" placeholder="" name="keterangan_barang">
          </div>
          <div class="form-group">
              <label for="">Jenis Barang</label>
              <!-- <input type="text" class="form-control" id="jenis_barang"  placeholder="" name="jenis_barang"> -->
              <select class="form-control" id="jenis_barang" placeholder="" name="jenis_barang">
                <option>Agricultural</option>
                <option>Metal</option>
                <option>Food</option>
                <option>Cement</option>
                <option>Mining</option>
                <option>Textile</option>
                <option>Marine</option>
                <option>Train</option>
              </select>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" id="harga_barang" placeholder="" name="harga_barang">
          </div>
          <div class="form-group">
            <label for="">Stok</label>
            <input type="text" class="form-control" id="stok_barang" placeholder="" name="stok_barang">
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
    <a href="<?php echo base_url('/dashboard')?>" class="logo">
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
                <a href="<?php echo base_url('backend/backend_logout')?>" class="btn btn-default">Logout</a>
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
            <div class="box-header">
              <h1 class="box-title">Daftar Barang</h1>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12 main">
                  <div class="box-tools pull-right">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <a href="<?php echo base_url('inputbarang')?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i>Tambahkan Data
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" >
                <tbody>
                  <tr>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Jenis Barang</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Tindakan</th>
                  </tr>
                  <?php foreach ($barang as $inputbarang):?>
                    <tr>
                      <td class="text-left"><?php echo $inputbarang->nama_barang?></td>
                      <td class="text-left"><?php echo $inputbarang->keterangan_barang?></td>
                      <td class="text-left"><?php echo $inputbarang->jenis_barang?></td>
                      <td class="text-left"><?php echo $inputbarang->harga_barang?></td>
                      <td class="text-left"><?php echo $inputbarang->stok_barang?></td>
                      <td class="text-center">
                        <!-- delete ketiga (cuma ubah yg action doang lho, tapi pastiin ada input type hidden sama submit) -->
                        <form class="" action="<?php echo base_url('admin/delete_barang')?>" method="post">
                          <!-- kelima -->
                          <button type="button" class="btn btn-warning" onclick="edit_barang('<?php echo $inputbarang->id_barang;?>')">
                            <i class="fa fa-edit"></i> Edit
                          </button>
                          <input type="hidden" name="id_barang" value="<?php echo $inputbarang->id_barang; ?>">
                          <button type="submit" class="btn btn-danger" name="hapus_barang">
                            <i class="fa fa-trash"></i> Hapus
                          </button>
                        </form>
                      </td>
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
<!-- data tabel -->
<script src="<?php echo base_url('assets\js\dataTables.bootstrap.js')?>"></script>
<!-- JQuery tabel -->
<script src="<?php echo base_url('jquery.dataTables.js')?>"></script>
<!-- keempat -->
<script type="text/javascript">
  function edit_barang(id_barang) {
    $.ajax({
      type: 'get',
      url : '<?php echo base_url('admin/edit_barang?id_barang=')?>'+id_barang,
      success: function(data) {
        $response = $(data);
        // ambil data dari url admin/edit_barang?id_barang=(sekian)
        var id_barang = $response.filter('#id_barang').text();
        var nama_barang = $response.filter('#nama_barang').text();
        var keterangan_barang = $response.filter('#keterangan_barang').text();
        var jenis_barang = $response.filter('#jenis_barang').text();
        var harga_barang = $response.filter('#harga_barang').text();
        var stok_barang = $response.filter('#stok_barang').text();
        // nampilkan ke modal
        $('#id_barang').val(id_barang);
        $('#nama_barang').val(nama_barang);
        $('#keterangan_barang').val(keterangan_barang);
        $('#jenis_barang').val(jenis_barang);
        $('#harga_barang').val(harga_barang);
        $('#stok_barang').val(stok_barang);
        $('#modal_edit_barang').modal('show');
      }
    });
  }
</script>
</body>
</html>
