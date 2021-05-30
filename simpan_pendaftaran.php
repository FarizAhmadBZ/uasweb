<?php
if (isset($_POST['submit'])) {
 session_start();
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$domisili=$_POST['domisili'];
$email=$_POST['email'];
$link_github=$_POST['link_github'];
$password=($_POST['password']);


$filename = $_FILES["gambar"]["name"];
$tempname = $_FILES["gambar"]["tmp_name"];   
$folder = "uploaded/".$filename;

if (move_uploaded_file($tempname, $folder))  {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}



//Query input menginput data kedalam tabel anggota
$sql = "INSERT INTO users (nama, jenis_kelamin, tanggal_lahir, domisili, email, link_github, password, gambar) VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$domisili', '$link_github', '$password', '$folder' )";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi, $sql);


//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header("location:login.php");
	$_SESSION['nama'] = $nama;
        $_SESSION['role'] = "member";
    
        setcookie($_SESSION['nama'],$nama);
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  
}
?>