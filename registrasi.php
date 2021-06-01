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
<div class="container">
<h2>Form Registrasi</h2>
<form action="simpan_pendaftaran.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="text" name="jenKel" class="form-control" placeholder="Masukan Jenis Kelamin" />
        </div>
        <div class="form-group">
	     <label>Tanggal Lahir:</label>
	     <input type="date" name="tglLahir" class="form-control" placeholder="Masukan Tanggal Lahir" />
	    </div> 
	    <div class="form-group">
	     <label>Domisili:</label>
	     <input type="text" name="domisili" class="form-control" placeholder="Masukan Domisili" />
	    </div> 
	    <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
        <div class="form-group">
            <label>Link Github:</label>
            <input type="text" name="linkGit" class="form-control" placeholder="Masukan Link Github" />
        </div>
	    <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pw" class="form-control" placeholder="Masukan Password" />
        </div>
        <div class="form-group">
            <label>Gambar:</label>
            <input type="file" name="gambar" class="form-control" placeholder="Masukan Gambar" />
        </div>
        <div class="form-group">
            <label>Bidang :</label>
            <input type="text" name="bidang" class="form-control" placeholder="Masukan Bidang Pekerjaan" />
        </div>
        


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
               </p>

    </form>
    
</body>

</html>