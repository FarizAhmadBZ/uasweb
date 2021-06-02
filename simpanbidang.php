<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$bidang = $_POST['editbidang'];

$sql = "call editbidang('$id', '$bidang');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti bidang!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti bidang!'); document.location = 'editbidang.php'</script>";
  }
}
?>