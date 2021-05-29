<?php
 session_start();
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST['nama'];
$password=($_POST['password']); 


//Query input menginput data kedalam tabel anggota
$sql = "INSERT INTO users (id, nama, jenis_kelamin, tanggal_lahir, domisili, email, link_github, password, gambar) VALUES ('$id', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$domisili', '$link_github', '$password', '$gambar' )";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi, $sql);


//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header("location:login.php");
	$_SESSION['nama'] = $nama;
        $_SESSION['role'] = "member";
    
        setcookie($_SESSION['username'],$username);
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>