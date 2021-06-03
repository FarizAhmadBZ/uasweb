<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$jenkel = $_POST['editjk'];
mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);
$sql = "call editkelamin('$id', '$jenkel');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti jenis kelamin!'); document.location = 'profile.php'</script>";
  }else {
	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti jenis kelamin!'); document.location = 'editjk.php'</script>";
  }
}
?>