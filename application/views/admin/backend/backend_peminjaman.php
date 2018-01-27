<?php

//select
$peminjam = array();
$judul_buku = array();
$tanggal_pinjam = array();
$jumlahPeminjam = 0;

$input = mysqli_query($mysqli ,"SELECT peminjam.nama_peminjam, buku.judul, pinjam.tanggal_pinjam FROM buku INNER JOIN pinjam ON buku.id_buku=pinjam.id_buku INNER JOIN peminjam ON pinjam.id_peminjam=peminjam.id_peminjam");
if (mysqli_num_rows($input)>0) {
  $jumlahPeminjam = mysqli_num_rows($input);
  while ($data = mysqli_fetch_assoc($input)) {
    array_push($peminjam, $data['nama_peminjam']);
    array_push($judul_buku, $data['judul']);
    array_push($tanggal_pinjam, $data['tanggal_pinjam']);
  }
}

?>
