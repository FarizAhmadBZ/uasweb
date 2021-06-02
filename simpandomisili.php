<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$dmsl = $_POST['editdmsl'];

$sql = "call editdomisili('$id', '$dmsl');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti Domisili!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti Domisili!'); document.location = 'editdomisili.php'</script>";
  }
}
?>