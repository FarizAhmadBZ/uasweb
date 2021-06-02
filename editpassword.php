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
	
	$query = "SELECT password FROM users WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    $fetched = mysqli_fetch_array($sql);
    $password = $fetched['password'];
?>

<div class="container">
<h2>Edit Password</h2>
<form action="simpanpassword.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Password :</label>
            <input type="password" name="editpassword" class="form-control" placeholder= "*******" >
        </div>
		<div class="form-group">
            <label>Konfirmasi Password :</label>
            <input type="password" name="konfirmasipassword" class="form-control" placeholder= "*******" >
        </div>
		<div class="form-group">
            <label>Password Lama :</label>
            <input type="password" name="passwordlama" class="form-control" placeholder= "*******" >
        </div>
		
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</body>