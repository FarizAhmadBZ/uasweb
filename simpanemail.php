<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);

$email = $_POST['editemail'];

$sql = "call editemail('$id', '$email');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti email!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti email!'); document.location = 'editemail.php'</script>";
  }
}
?>