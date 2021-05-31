<?php

session_start();
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $nama = $_POST['nama'];
  $jk = $_POST['jenKel'];
  $tglLahir = $_POST['tglLahir'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];
  $linkGit = $_POST['linkGit'];
  $pw = $_POST['pw'];

  $filename = $_FILES["gambar"]["name"];
  $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "uploaded/".$filename;

    //   	TESTING ECHO
  // echo "$nama<br/>";
  // echo "$jk<br/>";
  // echo "$tglLahir<br/>";
  // echo "$domisili<br/>";
  // echo "$email<br/>";
  // echo "$linkGit<br/>";
  // echo "$pw<br/>";

  // echo "$filename<br/>";
  // echo "$tempname<br/>";
  // echo "$folder<br/>";

  $sql = "INSERT INTO users(nama, jenis_kelamin, tanggal_lahir, domisili, email, link_github, password, gambar) VALUES('$nama', '$jk', '$tglLahir', '$domisili', '$email', '$linkGit', '$pw', '$folder');";

  $hasil = mysqli_query($koneksi, $sql);

  if ($hasil) {
    header("location:login.php?notif=Berhasil Daftar Akun");
    echo "Berhasil";
  }else {
    echo "gagal";
  }
}




?>