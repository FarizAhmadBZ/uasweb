<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$pj = $_POST['editpj'];
mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);
$sql = "call editpenanggungjawabp('$id', '$pj');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti nama penanggungjawab!'); document.location = 'profilep.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti nama penanggungjawab!'); document.location = 'editpenanggungjawabp.php'</script>";
  }
}
?>