<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link href="profile.css" rel="stylesheet">
</head>

<body>

<?php
session_Start();
include "koneksi.php";
$id = $_SESSION['id'];

$query = "SELECT gambar FROM users WHERE id = '$id'";
$sql1 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql1);
$gambar = $fetched['gambar'];

$query = "SELECT nama FROM users WHERE id = '$id'";
$sql2 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql2);
$nama = $fetched['nama'];

$query = "SELECT jenis_kelamin FROM users WHERE id = '$id'";
$sql3 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql3);
$jk = $fetched['jenis_kelamin'];

$query = "SELECT tanggal_lahir FROM users WHERE id = '$id'";
$sql4 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql4);
$tl = $fetched['tanggal_lahir'];

$query = "SELECT domisili FROM users WHERE id = '$id'";
$sql5 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql5);
$domisili = $fetched['domisili'];

$query = "SELECT email FROM users WHERE id = '$id'";
$sql6 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql6);
$email = $fetched['email'];

$query = "SELECT link_github FROM users WHERE id = '$id'";
$sql7 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql7);
$github = $fetched['link_github'];

$query = "SELECT bidang FROM users WHERE id = '$id'";
$sql8 = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql8);
$bidang = $fetched['bidang'];

?>

<div class="container">
<h2>Form Registrasi</h2>

        <div class="form-group">
            <label><img src = <?php echo $gambar?> align = "middle"><br><a class = "editbutton" href = "editgambar.php">(edit)</a> </label>
        </div>
	    <div class="form-group">
            <label>Nama: <?php echo $nama; ?> <a class = "editbutton" href = "editnama.php">(edit)</a></label>
        <div class="form-group">
            <label>Jenis Kelamin: <?php echo $jk; ?> <a class = "editbutton" href = "editjk.php">(edit)</a></label>
		<div class="form-group">
        </div>
        <div class="form-group">
	     <label>Tanggal Lahir: <?php echo $tl; ?> <a class = "editbutton" href = "edittanggallahir.php">(edit)</a></label>
	    </div> 
	    <div class="form-group">
	     <label>Domisili: <?php echo $domisili; ?> <a class = "editbutton" href = "editdomisili.php">(edit)</a></label>
	    </div> 
	    <div class="form-group">
            <label>Email: <?php echo $email; ?> <a class = "editbutton" href = "editemail.php">(edit)</a></label>
        </div>
        <div class="form-group">
            <label>Link Github: <?php echo $github; ?> <a class = "editbutton" href = "editgithub.php">(edit)</a></label>
        </div>
        <div class="form-group">
            <label>Bidang : <?php echo $bidang; ?> <a class = "editbutton" href = "editbidang.php">(edit)</a></label>
        </div>

        <button onclick="location.href='worker.php'" class = "tombol">Batal</button><button class="tombol">Submit</button>

</body>

</html>