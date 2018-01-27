<?php

//select
$id_buku = array();
$judul = array();
$pengarang = array();
$penerbit = array();
$tahun = array();
$stok = array();
$jumlahBuku = 0;

$input = mysqli_query($mysqli ,"SELECT * FROM buku");
if (mysqli_num_rows($input)>0) {
  $jumlahBuku = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($id_buku, $data['id_buku']);
    array_push($judul, $data['judul']);
    array_push($pengarang, $data['pengarang']);
    array_push($penerbit, $data['penerbit']);
    array_push($tahun, $data['tahun']);
    array_push($stok, $data['stok']);
  }
}

//tampilan buat edit
if (isset($_GET['id_buku'])) {
  $id_buku = $_GET['id_buku'];
  $judul = "";
  $pengarang= "";
  $penerbit = "";
  $tahun = "";
  $stok = "";

  $input = mysqli_query($mysqli ,"SELECT * FROM buku WHERE id_buku='".$id_buku."'");
  if (mysqli_num_rows($input)>0) {
    $data = mysqli_fetch_assoc($input);
      $judul = $data['judul'];
      $pengarang = $data['pengarang'];
      $penerbit = $data['penerbit'];
      $tahun = $data['tahun'];
      $stok = $data['stok'];
  }
}

//simpan
if (isset($_POST['simpan_buku'])) {
  $judul = "";
  $pengarang= "";
  $penerbit = "";
  $tahun = "";
  $stok = "";
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];

  $input = mysqli_query($mysqli ,"INSERT INTO buku VALUES ('null','".$judul."','".$pengarang."','".$penerbit."','".$tahun."','".$stok."')");
  if ($input) {
    ?>
    <script type="text/javascript">
      alert("Berhasil Disimpan");
      window.location = "daftarbuku.php";
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
elseif (isset($_POST['edit_buku'])) {
  ?>
  <script type="text/javascript">
    window.location = ("daftarbuku_edit.php?id_buku=<?php echo $_POST['id_buku']; ?>");
  </script>
  <?php
}

//update
if (isset($_POST['update_buku'])) {
  $id_buku = $_GET['id_buku'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];

    $input = mysqli_query($mysqli ,"UPDATE buku SET judul = '".$judul."', pengarang = '".$pengarang."', penerbit = '".$penerbit."', tahun = '".$tahun."', stok = '".$stok."' WHERE id_buku = '".$id_buku."';");
    if ($input) {
      ?>
      <script type="text/javascript">
        alert("Berhasil Diupdate");
        window.location = "daftarbuku.php";
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
elseif (isset($_POST['hapus_buku'])) {
      $id_buku = $_POST['id'];

      $input = mysqli_query($mysqli ,"DELETE FROM buku WHERE id_buku = '".$id_buku."';");
      if ($input) {
        ?>
        <script type="text/javascript">
          alert("Berhasil Dihapus");
          window.location = "daftarbuku.php";
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
