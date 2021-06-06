<?php

session_start();

if (isset($_SESSION['loggedin'])) {
	if (isset($_POST['submit'])) {
	
		include 'koneksi.php';

		$id = $_SESSION['id'];
		$email = $_POST['editemail'];

		$sqlCekEmail = "SELECT email FROM perusahaan where email = '$email' ";
		$hasilCek = mysqli_query($koneksi, $sqlCekEmail);
		if ($hasilCek) {
			echo "<script>alert('Email sudah ada yang menggunakan!'); document.location = 'editemailp.php'</script>";
		}else{
			$sql = "call editemailp('$id', '$email');";
			$hasil = mysqli_query($koneksi, $sql);
			if ($hasil) {
				echo "<script>alert('Berhasil mengganti email!'); document.location = 'profilep.php'</script>";
  			}else {
			echo "<script>alert('Gagal mengganti email!'); document.location = 'editemailp.php'</script>";
  			}	
		}
		
	}else{
		header("location:editemail.php");	
	}
}else{
	header("location:login.php");	
}

?>