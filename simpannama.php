<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$nama = $_POST['editnama'];

$sql = "call editnama('$id', '$nama');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti nama!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti nama!'); document.location = 'editnama.php'</script>";
  }
}
?>