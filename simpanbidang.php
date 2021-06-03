<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);

$bidang = $_POST['editbidang'];

$sql = "call editbidang('$id', '$bidang');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
	echo "<script>alert('Berhasil mengganti bidang!'); document.location = 'profile.php'</script>";

}else {
	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
	echo "<script>alert('Gagal mengganti bidang!'); document.location = 'editbidang.php'</script>";

}
}
?>