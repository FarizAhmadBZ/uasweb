<?php
    session_start();
    include "koneksi.php";

    echo $_POST['nama'];
    echo "<br>";
    echo $_POST['pw'];

    //Tangkap variabel dari inputan
    $nama = $_POST['nama'];
    $pw = $_POST['pw'];

    //matchkan dengan database
    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE nama = '$nama' AND password = '$pw' ");
    //mysqli_query()
    $jum = mysqli_num_rows($query);
    echo "<br>";
    // echo $jum;

    if($jum > 0)
    {
        

        

        //berhasil login dia masuk ke dashboar / administrator
        header("location:worker.php");
    }
    else
    {
        header("location:login.php");
        
    }
?>