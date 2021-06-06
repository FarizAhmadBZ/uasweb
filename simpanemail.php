<?php

session_start();

if (isset($_SESSION['loggedin'])) {
	if (isset($_POST['submit'])) {
	
		include 'koneksi.php';

		$id = $_SESSION['id'];
		$email = $_POST['editemail'];

		$sqlCekEmail = "SELECT email FROM users where email = '$email' ";
		$hasilCek = mysqli_query($koneksi, $sqlCekEmail);
		$jumlahCekEmail = mysqli_num_rows($hasilCek);
		if ($jumlahCekEmail > 0) {
			echo "<script>alert('Email sudah ada yang menggunakan!'); document.location = 'editemail.php'</script>";
		}else{
			$sql = "call editemail('$id', '$email');";
			$hasil = mysqli_query($koneksi, $sql);
			if ($hasil) {
				echo "<script>alert('Berhasil mengganti email!'); document.location = 'profile.php'</script>";
  			}else {
			echo "<script>alert('Gagal mengganti email!'); document.location = 'editemail.php'</script>";
  			}	
		}
		
	}else{
		header("location:editemail.php");	
	}
}else{
	header("location:login.php");	
}

?>