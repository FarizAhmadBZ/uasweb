<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$tgllhr = $_POST['edittgllhr'];

$sql = "call edittanggallahir('$id', '$tgllhr');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti tanggal lahir!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti tanggal lahir!'); document.location = 'edittanggallahir.php'</script>";
  }
}
?>