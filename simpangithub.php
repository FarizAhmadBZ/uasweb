<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$github = $_POST['editgithub'];

$sql = "call editgh('$id', '$github');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti link github!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti link github!'); document.location = 'editgithub.php'</script>";
  }
}
?>