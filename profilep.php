<?php
    session_Start();
    
    if ($_SESSION['loggedin'] == 'true') {
        ?>
    

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Your Profile</title>
    <link href="profile.css" rel="stylesheet">
</head>

<body>

<?php
include "koneksi.php";
$id = $_SESSION['id'];

$query = "SELECT * FROM perusahaan WHERE id = '$id'";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql);
$gambar = $fetched['gambar'];
$nama = $fetched['nama'];
$alamat = $fetched['alamat'];
$pj = $fetched['penangungjawab'];
$email = $fetched['email'];
$spek = $fetched['spesifikasi'];
$desc = $fetched['deskripsi'];

?>

<div class="container">

<h2>Profile</h2>

        <div class="form-group">
            <label><img src = "<?php echo $gambar;?>" align = "middle" width="200px" height="300px"><br><a class = "editbutton" href = "editgambarp.php">(edit)</a> </label>
        </div>
	    <div class="form-group">
            <label>Nama Perusahaan: <?php echo $nama; ?> <a class = "editbutton" href = "editnamap.php">(edit)</a></label>
        </div>
        <div class="form-group">
            <label>Alamat: <?php echo $alamat; ?> <a class = "editbutton" href = "editalamatp.php">(edit)</a></label>
        </div> 
	    <div class="form-group">
	       <label>Penanggung Jawab: <?php echo $pj; ?> <a class = "editbutton" href = "editpenanggungjawabp.php">(edit)</a></label>
	    </div> 
	    <div class="form-group">
            <label>Email: <?php echo $email; ?> <a class = "editbutton" href = "editemailp.php">(edit)</a></label>
        </div>
		<div class="form-group">
			<label>Password : ****** <a class = "editbutton" href ="editpasswordp.php">(edit)</a></label>
		</div>
        <div class="form-group">
            <label>Spesifikasi: <?php echo $spek; ?> <a class = "editbutton" href = "editspesifikasip.php">(edit)</a></label>
        </div>
        <div class="form-group">
            <label>Deskripsi : <p><?php echo $desc; ?></p> <a class = "editbutton" href = "editdeskripsip.php">(edit)</a></label>
        </div>

        <script>
            function konfirmasi() {
                var varKonfirmasi = confirm("Anda yakin ingin menghapus akun?");
                if(varKonfirmasi == true){
                    location.href='deleteaccount.php';
                }
            }
        </script>

        <button class="tombol" onclick="location.href='worker.php'">Kembali</button> <button class="tombol" onclick="konfirmasi()">Hapus Akun</button>

</body>

</html>
<?php

    }else{
        header("location:login.php");
    }

?>