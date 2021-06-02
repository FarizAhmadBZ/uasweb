<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$tgllhr = $_POST['edittgllhr'];

$sql = "call edittanggallahir('$id', '$tgllhr');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("lnotif=Berhasil Daftar Akun");
    echo "Berhasil";
  }else {
    echo "gagal";
  }
}
?>