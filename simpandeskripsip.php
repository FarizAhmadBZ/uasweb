<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$posdeskripsi = $_POST['deskripsi'];
$desc = nl2br($posdeskripsi);

$sql = "call editdeskripsip('$id', '$desc');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti deskripsi akun!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti deskripsi akun!'); document.location = 'editgithub.php'</script>";
  }
}
?>