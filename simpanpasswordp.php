<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$password = $_POST['editpassword'];
$password1 = $_POST['konfirmasipassword'];
$password2 = $_POST['passwordlama'];

$query = "SELECT password FROM perusahaan WHERE id = '$id'";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql);
$password3 = $fetched['password'];

if ($password2 == $password3) {
if ($password == $password1) {
	mysqli_autocommit($koneksi, FALSE);
	mysqli_begin_transaction($koneksi);
$sql = "call editpasswordp('$id', '$password');";
$hasil = mysqli_query($koneksi, $sql);
	if ($hasil) {
		mysqli_commit($koneksi);
    	mysqli_autocommit($koneksi, TRUE);
		echo "<script>alert('Berhasil ganti password!'); document.location = 'profilep.php'</script>";
	}else{
		mysqli_rollback($koneksi);
    	mysqli_autocommit($koneksi, TRUE);
		echo "<script>alert('Gagal ganti password!'); document.location = 'editpasswordp.php'</script>";
	}
}
else {
echo "<script>alert('password dan konfirmasi password berbeda!'); document.location = 'editpasswordp.php'</script>";
}
}
else {
echo "<script>alert('password lama salah!'); document.location = 'editpasswordp.php'</script>";
}
}
?>