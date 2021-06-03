<?php

	session_start();
	if($_SESSION['loggedin'] == 'true'){
		include 'koneksi.php';
		$id = $_SESSION['id'];
		$sql = "call unregistrasi('$id');";
		$hasil = mysqli_query($koneksi, $sql);
		if($hasil){
			session_destroy();
			echo "<script>alert('Berhasil menghapus akun!'); document.location = 'login.php'</script>";	
		}else{
			echo "<script>alert('Gagal menghapus akun!'); document.location = 'profile.php'</script>";	
		}
		
	}else{
		header("location:login.php");
	}

?>