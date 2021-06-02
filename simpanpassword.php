<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$password = $_POST['editpassword'];
$password1 = $_POST['konfirmasipassword'];
$password2 = $_POST['passwordlama'];

$query = "SELECT password FROM users WHERE id = '$id'";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql);
$password3 = $fetched['password'];

if ($password2 == $password3) {
if ($password == $password1) {
$sql = "call editpassword('$id', '$password');";
$hasil = mysqli_query($koneksi, $sql);
echo "<script>alert('Berhasil ganti password!'); document.location = 'profile.php'</script>";
}
else {
echo "<script>alert('password dan konfirmasi password berbeda!'); document.location = 'editpassword.php'</script>";
}
}
else {
echo "<script>alert('password lama salah!'); document.location = 'editpassword.php'</script>";
}
}
?>