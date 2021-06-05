<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$randomNum1 = rand(1111, 9999);
$randomNum2 = rand(1111, 9999);
$randomNum = $randomNum1.$randomNum2;
$randomNum = md5($randomNum);
$filename = $randomNum.".png";
$tempname = $_FILES["editgambar"]["tmp_name"];
$folder = "uploaded/".$filename;

mysqli_autocommit($koneksi, FALSE);
mysqli_begin_transaction($koneksi);

$sql = "call editgambarp('$id', '$folder');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
	mysqli_commit($koneksi);
    mysqli_autocommit($koneksi, TRUE);
	move_uploaded_file($tempname, $folder);
	echo "<script>alert('Berhasil mengganti gambar!'); document.location = 'profile.php'</script>";
  }else {
  	mysqli_rollback($koneksi);
    mysqli_autocommit($koneksi, TRUE);
echo "<script>alert('Gagal mengganti gambar!'); document.location = 'editgambar.php'</script>";
  }
}
?>