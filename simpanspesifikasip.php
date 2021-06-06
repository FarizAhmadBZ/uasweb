<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$posspek = $_POST['editspek'];
$spek = nl2br($posspek);

$sql = "call editspesifikasip('$id', '$spek');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti spesifikasi!'); document.location = 'profilep.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti spesifikasi!'); document.location = 'editspesifikasip.php'</script>";
  }
}
?>