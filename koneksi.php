<?php

	$namaserver = "localhost";
    $nama = "root";
    $password = "";
    $koneksi = mysqli_connect($namaserver, $nama, $password);
    mysqli_select_db($koneksi,"itwork") or die ("Database Salah!");
    
    //echo "Koneksi Berhasil";
    

?>