<?php

//select
$id_anggota = array();
$nama = array();
$password_anggota = array();
$telepon = array();
$alamat = array();
$jumlahAnggota = 0;

$input = mysqli_query($mysqli ,"SELECT * FROM peminjam");
if (mysqli_num_rows($input)>0) {
  $jumlahAnggota = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($id_anggota, $data['id_peminjam']);
    array_push($nama, $data['nama_peminjam']);
    array_push($password_anggota, $data['password']);
    array_push($telepon, $data['telepon']);
    array_push($alamat, $data['alamat']);
  }
}

//tampilan buat edit
if (isset($_GET['id_anggota'])) {
  $id_anggota = $_GET['id_anggota'];
  $nama = "";
  $password_anggota = "";
  $telepon = "";
  $alamat = "";

  $input = mysqli_query($mysqli ,"SELECT * FROM peminjam WHERE id_peminjam='".$id_anggota."'");
  if (mysqli_num_rows($input)>0) {
    $data = mysqli_fetch_assoc($input);
      $nama = $data['nama_peminjam'];
      $password_anggota = $data['password'];
      $telepon = $data['telepon'];
      $alamat = $data['alamat'];
  }
}

//simpan
if (isset($_POST['simpan_anggota'])) {
  $nama = "";
  $password_anggota = "";
  $telepon = "";
  $alamat = "";

  $nama = $_POST['nama_peminjam'];
  $password_anggota = $_POST['password'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];

  $input = mysqli_query($mysqli ,"INSERT INTO peminjam VALUES ('null','".$nama."', MD5('".$password_anggota."'),'".$telepon."','".$alamat."')");
  if ($input) {
    //untuk ambil id terbaru
    $input = mysqli_query($mysqli ,"SELECT MAX(id_peminjam) AS terbaru FROM peminjam");
    $data = mysqli_fetch_assoc($input);
    $_SESSION['id_peminjam_terbaru'] = $data['terbaru'];
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
  $password_anggota = $_POST['password'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];

    $input = mysqli_query($mysqli ,"UPDATE peminjam SET nama_peminjam = '".$nama."', MD5('".$password_anggota."'), telepon = '".$telepon."', alamat = '".$alamat."' WHERE id_peminjam = '".$id_anggota."';");
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
