<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$email = $_POST['editemail'];

$sql = "call editemail('$id', '$email');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti email!'); document.location = 'profile.php'</script>";
  }else {
echo "<script>alert('Gagal mengganti email!'); document.location = 'editemail.php'</script>";
  }
}
?>