<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keranjang</title>
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
    <h2>Troli Belanja</h2>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Troli Belanja Saya</h4>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <button type="button" class="btn btn-primary">
            <i class="fa fa-cart-plus"> Lanjut Belanja</i>
          </button>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Sub Total</th>
    				  </tr>
                </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>1</td>
                      <td> <img width="100" src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" alt=""/></td>
                      <td>Collar WS Center<br/></td>
            				  <td>
                        Agricultural
                        <!-- <select class="form-control" id="jenis_barang" placeholder="" name="jenis_barang">Agricultural -->
                          <!-- <option>Agricultural</option>
                          <option>Metal</option>
                          <option>Food</option>
                          <option>Cement</option>
                          <option>Mining</option>
                          <option>Textile</option>
                          <option>Marine</option>
                          <option>Train</option> -->
                        </select>
            				  </td>
                      <td>$120.00</td>
                      <td>46</td>
                      <td>$110.00</td>
                    </tr>
    				        <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>2</td>
                      <td> <img width="100" src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" alt=""/></td>
                      <td>Collar WS Center<br/></td>
            				  <td>
                        Agricultural
                        <!-- <select class="form-control" id="jenis_barang" placeholder="" name="jenis_barang">Agricultural -->
                          <!-- <option>Agricultural</option>
                          <option>Metal</option>
                          <option>Food</option>
                          <option>Cement</option>
                          <option>Mining</option>
                          <option>Textile</option>
                          <option>Marine</option>
                          <option>Train</option> -->
                        </select>
            				  </td>
                      <td>$7.00</td>
                      <td>145</td>
                      <td>$8.00</td>
                    </tr>
    				        <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>3</td>
                      <td> <img width="100" src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" alt=""/></td>
                      <td>Collar WS Center<br/></td>
            				  <td>
                        Agricultural
                        <!-- <select class="form-control" id="jenis_barang" placeholder="" name="jenis_barang">Agricultural -->
                          <!-- <option>Agricultural</option>
                          <option>Metal</option>
                          <option>Food</option>
                          <option>Cement</option>
                          <option>Mining</option>
                          <option>Textile</option>
                          <option>Marine</option>
                          <option>Train</option> -->
                        </select>
            				  </td>
                      <td>$120.00</td>
                      <td>146</td>
                      <td>$110.00</td>
                    </tr>

                    <tr>
                      <td colspan="7" style="text-align:right">Total Price:	</td>
                      <td> $228.00</td>
                    </tr>
    				        <tr>
                      <td colspan="7" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                      <td class=""> <strong> $155.00 </strong></td>
                    </tr>
    				      </tbody>
                </table>
              </div>
              <button type="button" class="btn btn-danger">
                <i class="fa fa-trash-o"> Delete Chart</i>
              </button>
              <button type="button" class="btn btn-info">
                <i class="fa fa-refresh"> Update Chart</i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-mail-forward" >
                  <a class="pembayaran"
                  href="<?php echo base_url('/pembayaran')?>"></a>Check Out
                </i>
              </button>
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
