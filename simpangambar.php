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

move_uploaded_file($tempname, $folder);

$sql = "call editgambar('$id', '$folder');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
echo "<script>alert('Berhasil mengganti gambar!'); document.location = 'profile.php'</script>";
    echo "Berhasil";
  }else {
echo "<script>alert('Gagal mengganti gambar!'); document.location = 'editgambar.php'</script>";
  }
}
?>