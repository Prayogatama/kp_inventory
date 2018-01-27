<?php

//select
$id_kembali = array();
$kembali_id_pinjam = array();
$tanggal_kembali = array();
$jumlah_denda = array();
$total = array();
$jumlahKembali = 0;

$input = mysqli_query($mysqli ,"SELECT * FROM kembali");
if (mysqli_num_rows($input)>0) {
  $jumlahKembali = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($id_kembali, $data['id_kembali']);
    array_push($kembali_id_pinjam, $data['id_pinjam']);
    array_push($tanggal_kembali, $data['tanggal_kembali']);
    array_push($jumlah_denda, $data['jumlah_denda']);
    array_push($total, $data['total']);
  }
}

//tampilan buat edit
if (isset($_GET['id_kembali'])) {
  $id_kembali = $_GET['id_kembali'];
  $kembali_id_pinjam = "";
  $tanggal_kembali = "";
  $jumlah_denda = "";
  $total = "";

  $input = mysqli_query($mysqli ,"SELECT * FROM kembali WHERE id_kembali='".$id_kembali."'");
  if (mysqli_num_rows($input)>0) {
    $data = mysqli_fetch_assoc($input);
      $kembali_id_pinjam = $data['id_pinjam'];
      $tanggal_kembali = $data['tanggal_kembali'];
      $jumlah_denda = $data['jumlah_denda'];
      $total = $data['total'];
  }
}

//simpan
if (isset($_POST['simpan_kembali'])) {

  $kembali_id_pinjam = $_POST['id_pinjam'];
  // $jumlah_denda = $_POST['jumlah_denda'];
  // $total = $_POST['total'];
  $jumlah_denda = 0;
  $total = 0;

  //buat ambil jumlah hari
  $query_ambil_selisih = mysqli_query($mysqli ,"SELECT datediff(CURRENT_DATE(),pinjam.tanggal_pinjam) AS selisih FROM pinjam WHERE id_pinjam = '".$kembali_id_pinjam."'");
  $hasil_selisih = mysqli_fetch_assoc($query_ambil_selisih);
  $kembali_selisih_hari = (int)$hasil_selisih['selisih'];

  if ($kembali_selisih_hari>7) {
    //isi denda
    $kembali_selisih_hari = $kembali_selisih_hari-7;
    $jumlah_denda = $kembali_selisih_hari*5000;
    $total = 10000+$jumlah_denda;
  } else {
    $jumlah_denda = 0;
    $total = 10000;
  }

  $input = mysqli_query($mysqli ,"INSERT INTO kembali VALUES ('null','".$kembali_id_pinjam."',CURRENT_DATE(),'".$jumlah_denda."','".$total."')");
  if ($input) {
    ?>
    <script type="text/javascript">
      alert("Berhasil Disimpan");
      window.location = "daftarkembali.php";
    </script>
    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("Gagal Disimpan");
    </script>
    <?php
  }
}

//edit
elseif (isset($_POST['edit_kembali'])) {
  ?>
  <script type="text/javascript">
    window.location = ("daftarkembali_edit.php?id_kembali=<?php echo $_POST['id_kembali']; ?>");
  </script>
  <?php
}

//update
if (isset($_POST['update_kembali'])) {
  $id_kembali = $_GET['id_kembali'];
  $kembali_id_pinjam = $_POST['id_pinjam'];
  $tanggal_kembali = $_POST['tanggal_kembali'];
  $jumlah_denda = $_POST['jumlah_denda'];
  $total = $_POST['total'];

    $input = mysqli_query($mysqli ,"UPDATE kembali SET id_pinjam = '".$kembali_id_pinjam."', tanggal_kembali = '".$tanggal_kembali."', jumlah_denda = '".$jumlah_denda."', total = '".$total."' WHERE id_kembali = '".$id_kembali."';");
    if ($input) {
      ?>
      <script type="text/javascript">
        alert("Berhasil Diupdate");
        window.location = "daftarkembali.php";
      </script>
      <?php
    } else {
      ?>
      <script type="text/javascript">
        alert("Gagal Diupdate");
      </script>
      <?php
    }
}

//hapus
elseif (isset($_POST['hapus_kembali'])) {
      $id_pinjam = $_POST['id_kembali'];

      $input = mysqli_query($mysqli ,"DELETE FROM kembali WHERE id_kembali = '".$id_kembali."';");
      if ($input) {
        ?>
        <script type="text/javascript">
          alert("Berhasil Dihapus");
          window.location = "daftarkembali.php";
        </script>
        <?php
      } else {
        ?>
        <script type="text/javascript">
          alert("Gagal Dihapus");
        </script>
        <?php
      }
}
?>
