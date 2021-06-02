<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$bidang = $_POST['editbidang'];

$sql = "call editbidang('$id', '$bidang');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("lnotif=Berhasil Daftar Akun");
    echo "Berhasil";
  }else {
    echo "gagal";
  }
}
?>