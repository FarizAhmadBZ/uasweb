<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$jenkel = $_POST['editjk'];

$sql = "call editkelamin('$id', '$jenkel');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti jenis kelamin!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti jenis kelamin!'); document.location = 'editjk.php'</script>";
  }
}
?>