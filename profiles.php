<?php
    session_Start();
    
    if ($_SESSION['loggedin'] == 'true') {
        if (isset($_POST['seeProfile'])) {
            # code...
        
        include "koneksi.php";
        $id = $_POST['idProfile'];

        $query = "SELECT * FROM users WHERE id = '$id'";
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
    <title>Profile</title>
    <link href="profile.css" rel="stylesheet">
</head>

<body>

<?php

$gambar = $fetched['gambar'];
$nama = $fetched['nama'];
$jk = $fetched['jenis_kelamin'];
$tl = $fetched['tanggal_lahir'];
$domisili = $fetched['domisili'];
$email = $fetched['email'];
$github = $fetched['link_github'];
$bidang = $fetched['bidang'];

?>

<div class="container">

<h2>Profile</h2>

        <div class="form-group">
            <label><img src = "<?php echo $gambar;?>" align = "middle" width="200px" height="300px"></label>
        </div>

	    <div class="form-group">
            <label>Nama: <?php echo $nama; ?> </label>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin: <?php echo $jk; ?></label>
        </div>

        <div class="form-group">
	     <label>Tanggal Lahir: <?php echo $tl; ?> </label>
	    </div> 

	    <div class="form-group">
	     <label>Domisili: <?php echo $domisili; ?></label>
	    </div> 

	    <div class="form-group">
            <label>Email: <?php echo $email; ?></label>
        </div>

        <div class="form-group">
            <label>Link Github: <a href="<?php echo $github; ?>">To Github</a></label>
        </div>

        <div class="form-group">
            <label>Bidang : <?php echo $bidang; ?> </label>
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