<?php

  $mysqli = mysqli_connect("localhost","root","","inventory");
  if ($mysqli){
    // echo "Koneksi Berhasil";
  }else{
    echo "Koneksi Gagal";
  }

 ?>
