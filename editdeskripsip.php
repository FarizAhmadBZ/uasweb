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
    <title>Edit Deskripsi Perusahaan</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<?php
	
	include "koneksi.php";

	
    $id = $_SESSION['id'];
	
	$query = "SELECT deskripsi FROM perusahaan WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    $fetched = mysqli_fetch_array($sql);
    $deskripsi = $fetched['deskripsi'];
    $deskripsi = preg_replace('#<br\s*/?>#i', "", $deskripsi);
?>

<div class="container">
<h2>Edit Deskripsi Perusahaan</h2>
<form action="simpandeskripsip.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Deskripsi :</label>
            <textarea class="form-control" name="deskripsi" maxlength="1000" rows="3" required style="white-space: pre-wrap; "><?php echo $deskripsi;?></textarea>
        </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</body>

<?php
    }else{
        header("location:login.php");
    }
?>