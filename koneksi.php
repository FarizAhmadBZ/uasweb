<?php
    $namaserver = "localhost";
    $nama = "root";
    $password = "";
    $koneksi = mysqli_connect($namaserver, $username, $password);
    mysqli_select_db($koneksi,"itwork") or die ("Database Salah!");
    
    //echo "Koneksi Berhasil";
    

?>