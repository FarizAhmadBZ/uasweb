<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$nama = $_POST['editnama'];

$sql = "call editnama('$id', '$nama');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("lnotif=Berhasil Daftar Akun");
    echo "Berhasil";
  }else {
    echo "gagal";
  }
}
?>