<?php
    session_start();
    if ($_SESSION['loggedin'] == 'true') {
        ?>
    

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Jenis Kelamin</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<?php
	
	include "koneksi.php";

	
    $id = $_SESSION['id'];
	
?>

<div class="container">
<h2>Edit Jenis Kelamin</h2>
<form action="simpanjk.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select class="form-select form-select-sm form-control" name="editjk" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</body>

<?php
    }else{
        header("location:login.php");
    }
?>