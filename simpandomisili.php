<?php

session_start();

if (isset($_POST['submit'])) {
	
include 'koneksi.php';

$id = $_SESSION['id'];

$dmsl = $_POST['editdmsl'];

$sql = "call editdomisili('$id', '$dmsl');";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("lnotif=Berhasil Daftar Akun");
    echo "Berhasil";
  }else {
    echo "gagal";
  }
}
?>