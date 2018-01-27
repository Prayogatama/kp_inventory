<?php


  // memeriksa apakah pengguna sudah login sebelumnya
  // if (isset($_SESSION['sudah_login'])) {
    // jika iya

    // memanggil file koneksi.php
    // include '../koneksi.php';

    // deklarasi variabel
    $user_nama     = "";
    $user_password = "";
    $user_telepon  = "";
    $user_alamat   = "";

    // memeriksa apakah tombol login sudah di klik
    if (isset($_POST['login_user'])) {

      // jika tombol login sudah di klik

      // deklarasi variabel untuk menguji apakah password dari database sama dengan yang diinputkan user
      $konfirmasiPasswordUser = "";

      // mengisi variabel username dan password dengan nilai yang diisikan user
      $user_nama     = $_POST['nama_peminjam'];
      $user_password = $_POST['password'];

      // membuat variabel query untuk mengambil data dari database
      $query = "SELECT * FROM peminjam WHERE nama_peminjam ='".$user_nama."'";

      // mengambil data dari database berdasarkan query dengan menggunakan mysqli
      // data disimpan pada variabel hasil dengan bentuk asociative array
      $hasil = mysqli_query($mysqli, $query);

      // memeriksa apakah hasil yang diterima pada variabel hasil lebih dari satu baris
      if (mysqli_num_rows($hasil) > 0) {

        // jika iya, dilakukan perulangan untuk mengambil nilai dari variabel data
        while($data = mysqli_fetch_assoc($hasil)){

          // mengambil nilai dari variabel data dan disimpan pada variabel yang telah dideklarisakan di awal
          // parameter associative array variabel data :
          // $data['nama_kolom']
          $konfirmasiPasswordUser = $data['password'];
          $id_peminjam            = $data['id_peminjam'];
          $user_nama              = $data['nama_peminjam'];
          $user_telepon           = $data['telepon'];
          $user_alamat            = $data['alamat'];
        }

      }else {
        // jika hasil yang diterima pada variabel hasil kurang dari nol baris
        // dimunculkan peringatan menggunakan javascript
?>

        <script type="text/javascript">
          alert("Nama Peminjam tidak ditemukan,\nSilahkan periksa kembali Nama anda.");
        </script>

<?php
      }
      // membuat variabel cekPassword untuk menyimpan nilai password yang telah diinputkan oleh user dalam bentuk yang telah ter-enkripsi md5
      $cekPassword = md5($user_password);

      // menguji apakah nilai variabel cekPassword sama dengan nilai variabel konfirmasiPassword
      if ($cekPassword == $konfirmasiPasswordUser) {
        // jika iya,
        // menyimpan data akun yang login pada session
        $_SESSION['id_peminjam'] = $id_peminjam;
        $_SESSION['nama_peminjam'] = $user_nama;
        $_SESSION['telepon'] = $user_telepon;
        $_SESSION['alamat'] = $user_alamat;
        $_SESSION['sudah_login'] = true;

        // dimunculkan pesan dengan javascript
?>
        <script type="text/javascript">
          // pesan selamat datang dengan javascript dan menampilkan nama depan akun dengan php
          alert("Selamat datang <?php echo $user_nama; ?>!");
          window.location = "meminjam.php";
        </script>

<?php

      } else {
        // jika nilai variabel cekPassword tidak sesuai dengan variabel konfirmasiPassword
        // dimunculkan peringatan dengan javascript
?>

        <script type="text/javascript">
          alert("Password salah, mohon periksa kembali password anda.");
        </script>

<?php
      }

    }
  // }
?>
