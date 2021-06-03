<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$tgllhr = $_POST['edittgllhr'];

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);
$sql = "call edittanggallahir('$id', '$tgllhr');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti tanggal lahir!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti tanggal lahir!'); document.location = 'edittanggallahir.php'</script>";
  }
}
?>