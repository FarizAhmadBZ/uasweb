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

$query = "SELECT * FROM users WHERE id = '$id'";
$sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
$fetched = mysqli_fetch_array($sql);
$gambar = $fetched['gambar'];
$nama = $fetched['nama'];
$jk = $fetched['jenis_kelamin'];
$tl = $fetched['tanggal_lahir'];
$domisili = $fetched['domisili'];
$email = $fetched['email'];
$github = $fetched['link_github'];
$bidang = $fetched['bidang'];
$deskripsi = $fetched['deskripsi'];

?>

<div class="container">

<h2>Profile</h2>

        <div class="form-group">
            <label><img src = "<?php echo $gambar;?>" align = "middle" width="200px" height="300px"><br><a class = "editbutton" href = "editgambar.php">(edit)</a> </label>
        </div>

	    <div class="form-group">
            <label>Nama: <?php echo $nama; ?> <a class = "editbutton" href = "editnama.php">(edit)</a></label>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin: <?php echo $jk; ?> <a class = "editbutton" href = "editjk.php">(edit)</a></label>
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
		<div class="form-group">
			<label>Password : ****** <a class = "editbutton" href ="editpassword.php">(edit)</a></label>
		</div>
        <div class="form-group">
            <label>Deskripsi : <p><?php echo $deskripsi; ?></p> <a class = "editbutton" href = "editdeskripsi.php">(edit)</a></label>
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