<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengiriman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/blue.css')?>">
  <!-- untuk css tabel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/blue.css')?>">

</head>
<body class="hold-transition register-page">
  <div class="col-sm-9">
    <h2>Tabel Pengiriman</h2>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Pengiriman Anda</h4>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <!-- Main content -->
          <!-- <section class="content"> -->
            <!-- Your Page Content Here -->
            <form class="" action="<?php echo base_url('admin/create_barang') ?>" method="post">
              <div class="row">
                <div class="col-sm-12 col-md-12 main">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h2 class="box-title">Pengiriman Barang</h2>
                      <div class="box-tools pull-right">
                      </div> <!-- /.box-tools -->
                    </div> <!-- /.box-header -->
                    <div class="box-body border-radius">
                      <div class="row rata-kanan-kiri">
                        <div class="sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
                          <div class="container">
                            <div class="row">
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2" for="">Nama Lengkap</label>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" required="true" name="nama_barang">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2" for="">Alamat</label>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" id="" placeholder="Alamat" required="true" name="keterangan_barang">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2" for="">Provinsi</label>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" id="" placeholder="Provinsi" required="true" name="keterangan_barang">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2" for="">Kecamatan</label>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" id="" placeholder="Kecamatan" required="true" name="keterangan_barang">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2" for="">No Telephone</label>
                                  <div class="col-md-5">
                                    <input type="number" class="form-control" id="" placeholder="No Telephone" required="true" name="keterangan_barang">*) untuk memastikan kiriman
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-5 col-md-push-6">
                                    <button type="submit" class="btn btn-primary" name="simpan">
                                      <a class="pembayaran"
                                      href="<?php echo base_url('/pembayaran')?>"></a>
                                      Lanjutkan
                                    </button>
                                  </form>
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
          <!-- </section> -->
          <!-- /.content -->
        </div>
      </div>
    </div>
  </div>


<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/js/icheck.min.js')?>"></script>
<!-- JQuery tabel -->
<script src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>
<!-- javascript Tabel -->
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
