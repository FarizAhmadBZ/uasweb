<?php
    if (isset($_POST['submit'])) {
        # code...
    

    include "koneksi.php";

    // echo $_POST['email'];
    // echo "<br>";
    // echo $_POST['pw'];

    //Tangkap variabel dari inputan
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    //matchkan dengan database
    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE email = '$email' AND password = '$pw' ");
    //mysqli_query()
    $jum = mysqli_num_rows($query);
    echo "<br>";
    // echo $jum;

    $fetched = mysqli_fetch_array($query);

    if($jum > 0)
    {
        session_start();
        $_SESSION['loggedin'] = 'true';
        $_SESSION['id'] = $fetched['id'];
        $_SESSION['user'] = $fetched['nama'];
        $_SESSION['tipeAkun'] = "worker";
        // echo $_SESSION['loggedin']."<br>";
        // echo $_SESSION['id']."<br>";
        // echo $_SESSION['user']."<br>";

        //berhasil login dia masuk ke dashboar / administrator
        header("location:worker.php");
    }
    else
    {
        echo "<script>alert('Akun salah'); document.location = 'login.php';</script>";
        
    }
}else{
    echo "<script>window.history.back();</script>";
}
?>