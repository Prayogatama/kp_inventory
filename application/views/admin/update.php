<?php //echo validation_errors(); ?>
<?php echo $pesan ?>
<?php //echo form_open('news/update/'.$news_item['id']); ?>

<form class="" action="<?php echo base_url('admin/update/'.$M_inputbarang['id'])?>" method="post">
  <!-- update barang -->
  <label for="title">Judul</label>
  <input type="text" name="title" value='<?php echo $news_item['title']; ?>'> <br>

  <label for="nama_barang">Nama Barang</label>
  <input type="text" name="nama_barang" value="<?php echo $M_inputbarang['nama_barang']; ?>"> <br>

  <label for="keterangan_barang">Keterangan</label>
  <input type="text" name="keterangan_barang" > <br>

  <label for="jenis_barang">Jenis Barang</label>
  <input type="text" name="jenis_barang" > <br>

  <label for="harga_barang">Harga</label>
  <input type="number" name="harga_barang" > <br>

  <label for="stok_barang">Stok</label>
  <input type="number" name="stok_barang" > <br>

  <input type="submit" name="submit" value="simpan">
</form>
<?php //echo form_close(); ?>
