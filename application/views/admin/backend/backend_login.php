<?php

  // membuka session untuk mengolah data akun yang login
  session_start();

  // memeriksa apakah pengguna sudah login sebelumnya
  // if (isset($_SESSION['sudah_login'])) {
    // jika iya

    // memanggil file koneksi.php
    // include '../koneksi.php';

    // deklarasi variabel
    $username   = "";
    $password   = "";
    $nama_petugas = "";
    $telepon = "";

    // memeriksa apakah tombol login sudah di klik
    if (isset($_POST['login'])) {

      // jika tombol login sudah di klik

      // deklarasi variabel untuk menguji apakah password dari database sama dengan yang diinputkan user
      $konfirmasiPassword = "";

      // mengisi variabel username dan password dengan nilai yang diisikan user
      $username = $_POST['username'];
      $password = $_POST['password'];

      // membuat variabel query untuk mengambil data dari database
      $query = "SELECT * FROM petugas WHERE username='".$username."'";

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
          $konfirmasiPassword = $data['password'];
          $id_petugas         = $data['id_petugas'];
          $nama_petugas       = $data['nama_petugas'];
          $telepon            = $data['telepon'];
        }

      }else {
        // jika hasil yang diterima pada variabel hasil kurang dari nol baris
        // dimunculkan peringatan menggunakan javascript
?>

        <script type="text/javascript">
          alert("Username tidak ditemukan,\nSilahkan periksa kembali username anda.");
        </script>

<?php
      }
      // membuat variabel cekPassword untuk menyimpan nilai password yang telah diinputkan oleh user dalam bentuk yang telah ter-enkripsi md5
      $cekPassword = md5($password);

      // menguji apakah nilai variabel cekPassword sama dengan nilai variabel konfirmasiPassword
      if ($cekPassword == $konfirmasiPassword) {
        // jika iya,
        // menyimpan data akun yang login pada session
        $_SESSION['id_petugas'] = $id_petugas;
        $_SESSION['username'] = $username;
        $_SESSION['nama_petugas'] = $nama_petugas;
        $_SESSION['telepon'] = $telepon;
        $_SESSION['sudah_login'] = true;

        // dimunculkan pesan dengan javascript
?>
        <script type="text/javascript">
          // pesan selamat datang dengan javascript dan menampilkan nama depan akun dengan php
          alert("Selamat datang <?php echo $nama_petugas; ?>!");
          window.location = "dasboard.php";
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
