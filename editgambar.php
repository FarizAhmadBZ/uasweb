<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<?php
	
	include "koneksi.php";
	session_start();
	
    $id = $_SESSION['id'];
	
	$query = "SELECT gambar FROM users WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    $fetched = mysqli_fetch_array($sql);
    $gambar = $fetched['gambar'];
	
?>

<div class="container">
<h2>Edit Gambar</h2>
<form action="simpangambar.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Gambar sebelumnya : <img src= <?php echo $gambar;?>></label>
            <input type="file" name="editgambar"  accept="image/png, image/jpeg" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</body>