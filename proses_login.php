<?php
    session_start();
    include "koneksi.php";

    echo $_POST['username'];
    echo "<br>";
    echo $_POST['password'];

    //Tangkap variabel dari inputan
    $username = $_POST['username'];
    $password = $_POST['password'];

    //matchkan dengan database
    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE id = '$id' AND nama = '$nama'");
    //mysqli_query()
    $jum = mysqli_num_rows($query);
    echo "<br>";
    // echo $jum;

    if($jum > 0)
    {
        //bikin variabel session
        
        
        $_SESSION['username'] = $nama;
        $_SESSION['role'] = "member";
        //$namakukie = username;
        //$_COOKIE("username","mimin rpl");
        setcookie($_SESSION['username'],$nama);

        

        //berhasil login dia masuk ke dashboar / administrator
        header("location:index.php");
    }
    else
    {
        header("location:login.php");
        
    }
?>