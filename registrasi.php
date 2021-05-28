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
<form action="simpan_pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
	    <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
	    <div class="form-group">
	     <label>Alamat:</label>
	     <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
	    </div> 
	    <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
	    <div class="form-group">
            <label>No HP:</label>
            <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
	    <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
    </form>
</body>

</html>