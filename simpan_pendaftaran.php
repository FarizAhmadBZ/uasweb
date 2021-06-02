<?php

session_start();
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $nama = $_POST['nama'];
  $jk = $_POST['jenKel'];
  $tglLahir = $_POST['tglLahir'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];
  $linkGit = $_POST['linkGit'];
  $pw = $_POST['pw'];
  $bidang = $_POST['bidang'];
  

  $filename = $_FILES["gambar"]["name"];
  $tempname = $_FILES["gambar"]["tmp_name"];
  $folder = "uploaded/".$filename;

  $cekEmail = "SELECT * FROM users WHERE email = '$email';";
  $hasilCekEmail = mysqli_query($koneksi, $cekEmail);
  $jumlahCekEmail = mysqli_num_rows($hasilCekEmail);
  if ($jumlahCekEmail > 0) {
    echo "<script>alert('EMAIL SUDAH TERPAKAI'); document.location = 'registrasi.php'</script>";
  }else{
    move_uploaded_file($tempname, $folder);
    $sql = "CALL registrasi('$nama', '$jk', '$tglLahir', '$domisili', '$email', '$linkGit', '$pw', '$folder', '$bidang');";

    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
      echo "<script>alert('Berhasil mendaftarkan akun'); document.location = 'login.php'</script>";
    }else {
      echo "<script>alert('Gagal mendaftarkan akun'); document.location = 'registrasi.php'</script>";
    }
  }

}

?>