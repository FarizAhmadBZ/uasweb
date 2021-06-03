<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$github = $_POST['editgithub'];

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);

$sql = "call editgh('$id', '$github');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti link github!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti link github!'); document.location = 'editgithub.php'</script>";
  }
}
?>