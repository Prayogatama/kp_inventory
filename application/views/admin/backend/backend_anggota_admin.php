<?php

//select
$id_anggota = array();
$nama = array();
$telepon = array();
$alamat = array();
$jumlahAnggota = 0;

$input = mysqli_query($mysqli ,"SELECT * FROM peminjam");
if (mysqli_num_rows($input)>0) {
  $jumlahAnggota = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($id_anggota, $data['id_peminjam']);
    array_push($nama, $data['nama_peminjam']);
    array_push($telepon, $data['telepon']);
    array_push($alamat, $data['alamat']);
  }
}

//tampilan buat edit
if (isset($_GET['id_anggota'])) {
  $id_anggota = $_GET['id_anggota'];
  $nama = "";
  $telepon = "";
  $alamat = "";

  $input = mysqli_query($mysqli ,"SELECT * FROM peminjam WHERE id_peminjam='".$id_anggota."'");
  if (mysqli_num_rows($input)>0) {
    $data = mysqli_fetch_assoc($input);
      $nama = $data['nama_peminjam'];
      $telepon = $data['telepon'];
      $alamat = $data['alamat'];
  }
}

//simpan
if (isset($_POST['simpan_anggota'])) {
  $nama = "";
  $telepon = "";
  $alamat = "";
  
  $nama = $_POST['nama_peminjam'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];

  $input = mysqli_query($mysqli ,"INSERT INTO peminjam VALUES ('null','".$nama."','".$telepon."','".$alamat."')");
  if ($input) {
    ?>
    <script type="text/javascript">
      alert("Berhasil Disimpan");
      window.location = "meminjam.php";
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
elseif (isset($_POST['edit_anggota'])) {
  ?>
  <script type="text/javascript">
    window.location = ("daftaranggota_edit.php?id_anggota=<?php echo $_POST['id_peminjam']; ?>");
  </script>
  <?php
}

//update
if (isset($_POST['update_anggota'])) {
  $id_anggota = $_GET['id_anggota'];
  $nama = $_POST['nama_peminjam'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];

    $input = mysqli_query($mysqli ,"UPDATE peminjam SET nama_peminjam = '".$nama."', telepon = '".$telepon."', alamat = '".$alamat."' WHERE id_peminjam = '".$id_anggota."';");
    if ($input) {
      ?>
      <script type="text/javascript">
        alert("Berhasil Diupdate");
        window.location = "dasboard.php";
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
elseif (isset($_POST['hapus_anggota'])) {
      $id_anggota = $_POST['id_anggota'];

      $input = mysqli_query($mysqli ,"DELETE FROM peminjam WHERE id_peminjam = '".$id_anggota."';");
      if ($input) {
        ?>
        <script type="text/javascript">
          alert("Berhasil Dihapus");
          window.location = "dasboard.php";
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
