<?php

  if(isset($_POST['submit'])){

    include 'koneksi.php';

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $link_github = $_POST['link_github'];
    $pass = ($_POST['password']);

    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "uploaded/".$filename;

    $sql = "INSERT INTO users (nama, jenis_kelamin, tanggal_lahir, domisili, email, link_github, password, gambar) VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$domisili', '$link_github', '$pass', '$folder' )";

    move_uploaded_file($tempname, $folder);

    $hasil=mysqli_query($koneksi, $sql);

    if ($hasil) {
      header("location:login.php");
      $_SESSION['nama'] = $nama;
      $_SESSION['role'] = "member";
      setcookie($_SESSION['nama'],$nama);
      exit;
    }
    else {
      echo "Gagal simpan data anggota";
      exit;
    }  
  }

?>