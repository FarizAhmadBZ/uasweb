<?php
    session_Start();
    
    if ($_SESSION['loggedin'] == 'true') {
        if (isset($_POST['seeProfile'])) {
            # code...
        
        include "koneksi.php";
        $id = $_POST['idProfile'];

        $query = "SELECT * FROM perusahaan WHERE id = '$id'";
        $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
        $fetched = mysqli_fetch_array($sql);
        ?>
    

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Profilep</title>
    <link href="profile.css" rel="stylesheet">
</head>

<body>

<?php

$gambar = $fetched['gambar'];
$nama = $fetched['nama'];
$alamat = $fetched['alamat'];
$pj = $fetched['penangungjawab'];
$email = $fetched['email'];
$spek = $fetched['spesifikasi'];
$desc = $fetched['deskripsi'];

?>

<div class="container">

<h2>Profile Perusahaan</h2>

        <div class="form-group">
            <label><img src = "<?php echo $gambar;?>" align = "middle" width="200px" height="300px"></label>
        </div>

	    <div class="form-group">
            <label>Nama Perusahaan: <?php echo $nama; ?> </label>
        </div>

        <div class="form-group">
            <label>Alamat: <?php echo $alamat; ?></label>
        </div>

        <div class="form-group">
	     <label>Penanggung Jawab: <?php echo $pj; ?> </label>
	    </div> 

	    <div class="form-group">
            <label>Email: <?php echo $email; ?></label>
        </div>

        <div class="form-group">
            <label>Spesifikasi: <?php echo $spek; ?></label>
        </div>

        <div class="form-group">
            <label>Deskripsi : </label>
            <p><?php echo $desc; ?></p>
        </div>
        <center>
            <button class="tombol" onclick="window.history.back();">Kembali</button>    
        </center>
        

</body>

</html>
<?php
        }else{
            header("location:worker.php");    
        }

    }else{
        header("location:login.php");
    }

?>