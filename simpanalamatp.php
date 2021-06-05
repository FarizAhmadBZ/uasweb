<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$alamat = $_POST['editalamat'];
mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);
$sql = "call editalamatp('$id', '$alamat');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti alamat!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti alamat!'); document.location = 'editnama.php'</script>";
  }
}
?>