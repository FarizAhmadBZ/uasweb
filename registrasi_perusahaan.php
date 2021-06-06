<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Register Perusahaan</title>
    <link href="registrasi_p.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2>Form Registrasi Perusahaan</h2>
<form action="simpan_perusahaan.php" method="POST" enctype="multipart/form-data">
	   <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
        </div> 
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>
         <div class="form-group">
            <label>Deskripsi:</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" maxlength="1000" rows="3" required style="white-space: pre-wrap; "></textarea>
        </div>
        <div class="form-group">
	     <label>Alamat:</label>
	     <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required/>
	    </div> 
        <div class="form-group">
            <label> Penanggung Jawab:</label>
            <input type="text" name="pj" class="form-control" placeholder="Masukan Penanggung Jawab" required/>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pw" class="form-control" placeholder="Masukan Password" required/>
        </div>
        <div class="form-group">
            <label>Spesifikasi:</label>
            <textarea class="form-control" name="spek" placeholder="Spesifikasi" maxlength="1000" rows="3" required style="white-space: pre-wrap; "></textarea>
        </div>
        <div class="form-group">
            <label>Gambar:</label>
            <input type="file" name="gambar"  accept="image/png, image/jpeg" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<a href="registrasi.php">Registrasi sebagai worker</a>
        <p> Sudah punya akun?
                  <a href="loginp.php">Login di sini</a>
               </p>

    </form>
</body>

</html>