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
    <title>Edit Nama</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<?php
	
	include "koneksi.php";
	
    $id = $_SESSION['id'];
	
	$query = "SELECT nama FROM users WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    $fetched = mysqli_fetch_array($sql);
    $name = $fetched['nama'];
?>

<div class="container">
<h2>Edit Nama</h2>
<form action="simpannama.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="editnama" class="form-control" placeholder= "<?php echo $name; ?>" required>
        </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</body>

<?php
    }else{
        header("location:login.php");
    }
?>