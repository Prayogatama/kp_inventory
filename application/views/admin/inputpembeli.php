<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" media="screen" title="no title">
    <link rel="stylesheet" href="<?php echo base_url('/header.css')?>" media="screen">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default melayang">
            <div class="panel-heading">
              <h3 class="panel-title">Registrasi Pembeli</h3>
              <div class="panel-body">
                <div class="box-body border-radius-none">
                  <div class="row">
                    <div class="col-xs-12 tengah">
                      <h3>Pembeli</h3>
                    </div>
                  </div>
                  <div class="row rata-kanan-kiri">
                    <div class="sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
                      <div class="container">
                        <div class="row">
                          <div class="form-group">
                            <div class="row">
                              <label class="col-md-2" for="">Id Pembeli</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" id="" placeholder="" required="true" name="Id_Karyawan">
                              </div>
                            </div>
                         </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-md-2" for="">Nama Pembeli</label>
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
                              <label class="col-md-2" for="">Password</label>
                              <div class="col-md-5">
                                <input type="password" class="form-control" id="" placeholder="" required="true" name="pass">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-md-2" for="">Telepon</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" id="" placeholder="" required="true" name="telepon">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-md-2" for="">Nama Instansi</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" id="" placeholder="" required="true" name="namaInstansi">
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
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
