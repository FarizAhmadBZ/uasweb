<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);

$dmsl = $_POST['editdmsl'];

$sql = "call editdomisili('$id', '$dmsl');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Berhasil mengganti Domisili!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti Domisili!'); document.location = 'editdomisili.php'</script>";
  }
}
?>