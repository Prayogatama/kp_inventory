<?php

//select
$id_pinjam = array();
$pinjam_id_buku = array();
$pinjam_id_anggota = array();
$tanggal_pinjam = array();
$jumlahPinjam = 0;

$input = mysqli_query($mysqli ,"SELECT * FROM pinjam");
if (mysqli_num_rows($input)>0) {
  $jumlahPinjam = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($id_pinjam, $data['id_pinjam']);
    array_push($pinjam_id_buku, $data['id_buku']);
    array_push($pinjam_id_anggota, $data['id_peminjam']);
    array_push($tanggal_pinjam, $data['tanggal_pinjam']);
  }
}

//tampilan buat edit
if (isset($_GET['id_pinjam'])) {
  $id_pinjam = $_GET['id_pinjam'];
  $pinjam_id_buku = "";
  $pinjam_id_anggota = "";
  $tanggal_pinjam = "";

  $input = mysqli_query($mysqli ,"SELECT * FROM pinjam WHERE id_pinjam='".$id_pinjam."'");
  if (mysqli_num_rows($input)>0) {
    $data = mysqli_fetch_assoc($input);
      $pinjam_id_buku = $data['id_buku'];
      $pinjam_id_anggota = $data['id_peminjam'];
      $tanggal_pinjam = $data['tanggal_pinjam'];
  }
}

//simpan
if (isset($_POST['simpan_pinjam'])) {

  $pinjam_id_buku = $_POST['id_buku'];
  $pinjam_id_anggota = $_POST['id_peminjam'];

  $input = mysqli_query($mysqli ,"INSERT INTO pinjam VALUES ('null','".$pinjam_id_buku."','".$pinjam_id_anggota."',CURRENT_DATE())");
  if ($input) {
    ?>
    <script type="text/javascript">
      alert("Berhasil Disimpan");
      window.location = "daftarpinjam.php";
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
elseif (isset($_POST['edit_pinjam'])) {
  ?>
  <script type="text/javascript">
    window.location = ("daftarpinjam_edit.php?id_pinjam=<?php echo $_POST['id_pinjam']; ?>");
  </script>
  <?php
}

//update
if (isset($_POST['update_pinjam'])) {
  $id_pinjam = $_GET['id_pinjam'];
  $pinjam_id_buku = $_POST['id_buku'];
  $pinjam_id_anggota = $_POST['id_peminjam'];
  $tanggal_pinjam = $_POST['tanggal_pinjam'];

    $input = mysqli_query($mysqli ,"UPDATE pinjam SET id_buku = '".$pinjam_id_buku."', id_peminjam = '".$pinjam_id_anggota."', tanggal_pinjam = '".$tanggal_pinjam."' WHERE id_pinjam = '".$id_pinjam."';");
    if ($input) {
      ?>
      <script type="text/javascript">
        alert("Berhasil Diupdate");
        window.location = "daftarpinjam.php";
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
elseif (isset($_POST['hapus_pinjam'])) {
      $id_pinjam = $_POST['id_pinjam'];

      $input = mysqli_query($mysqli ,"DELETE FROM pinjam WHERE id_pinjam = '".$id_pinjam."';");
      if ($input) {
        ?>
        <script type="text/javascript">
          alert("Berhasil Dihapus");
          window.location = "daftarpinjam.php";
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
