<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Register</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2>Form Registrasi</h2>
<form action="simpan_pendaftaran.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select class="form-select form-select-sm form-control" name="jenKel" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
        <div class="form-group">
	     <label>Tanggal Lahir:</label>
	     <input type="date" name="tglLahir" class="form-control" placeholder="Masukan Tanggal Lahir" required/>
	    </div> 
	    <div class="form-group">
	     <label>Domisili:</label>
	     <input type="text" name="domisili" class="form-control" placeholder="Masukan Domisili" required/>
	    </div> 
	    <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
        </div>
        <div class="form-group">
            <label>Link Github:</label>
            <input type="text" name="linkGit" class="form-control" placeholder="Masukan Link Github" required/>
        </div>
	    <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pw" class="form-control" placeholder="Masukan Password" required/>
        </div>
        <div class="form-group">
            <label>Gambar:</label>
            <input type="file" name="gambar"  accept="image/png, image/jpeg" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
        <div class="form-group">
            <label>Bidang:</label>
            <div class="form-check">
                <input type="Checkbox" name="bidang[]" class="form-check-input" id="chkWeb" value="Web Developer">
                <label class="form-check-label" for="chkWeb">Web Developer</label>
            </div>

            <div class="form-check">
                <input type="Checkbox" name="bidang[]" class="form-check-input" id="chkDesk" value="Desktop Developer">
                <label class="form-check-label" for="chkDesk">Desktop Developer</label>
            </div>
                
            <div class="form-check">
                <input type="Checkbox" name="bidang[]" class="form-check-input" id="chkMobile" value="Mobile Developer">
                <label class="form-check-label" for="chkMobile">Mobile Developer</label>
            </div>

            <div class="form-check">
                <input type="Checkbox" name="bidang[]" class="form-check-input" id="chkIT" value="IT Consultant">
                <label class="form-check-label" for="chkIT">IT Consultant</label>
            </div>

            <div class="form-check">
                <input type="Checkbox" name="bidang[]" class="form-check-input" id="chkDB" value="Database Engineer">
                <label class="form-check-label" for="chkDB">Database Engineer</label>
            </div>
        </div>
        <div class="form-group">
            <label>Deskripsi:</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" maxlength="1000" rows="3" required style="white-space: pre-wrap; "></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<a href="registrasi_perusahaan.php">Registrasi sebagi perusahaan</a>
        <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
               </p>

    </form>
</div>
</body>

</html>