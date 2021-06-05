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

  $posdeskripsi = $_POST['deskripsi'];
  $desc = nl2br($posdeskripsi);
  $bidang = "";
  foreach ($_POST['bidang'] as $chkbx) {
      $bidang .= $chkbx.", ";
    }
  $bidang = substr($bidang, 0, -2);
  

  $randomNum1 = rand(1111, 9999);
  $randomNum2 = rand(1111, 9999);

  $randomNum = $randomNum1.$randomNum2;
  $randomNum = md5($randomNum);

  $filename = $randomNum.".png";
  $tempname = $_FILES["gambar"]["tmp_name"];
  $folder = "uploaded/".$filename;

  mysqli_autocommit($koneksi, FALSE);
  mysqli_begin_transaction($koneksi);

  $cekEmail = "SELECT * FROM users WHERE email = '$email';";
  $hasilCekEmail = mysqli_query($koneksi, $cekEmail);
  $jumlahCekEmail = mysqli_num_rows($hasilCekEmail);
  if ($jumlahCekEmail > 0) {
    echo "<script>alert('EMAIL SUDAH TERPAKAI'); document.location = 'registrasi.php'</script>";
  }else{
    move_uploaded_file($tempname, $folder);
    $sql = "CALL registrasi('$nama', '$jk', '$tglLahir', '$domisili', '$email', '$linkGit', '$pw', '$folder', '$bidang', '$desc');";

    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
      echo "<script>alert('Berhasil mendaftarkan akun'); document.location = 'login.php'</script>";
      mysqli_commit($koneksi);
      mysqli_autocommit($koneksi, TRUE);
    }else {
      echo "<script>alert('Gagal mendaftarkan akun'); document.location = 'registrasi.php'</script>";
      mysqli_rollback($koneksi);
      mysqli_autocommit($koneksi, TRUE);
    }
  }

}

?>