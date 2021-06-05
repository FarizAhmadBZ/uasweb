<?php

session_start();
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $posdeskripsi = $_POST['deskripsi'];
  $desc = nl2br($posdeskripsi);
  $alamat = $_POST['alamat'];
  $pj = $_POST['pj'];
  $posspecs= $_POST['specs'];
  $specs = nl2br($posspecs);
  $pw = $_POST['pw'];

  

  $randomNum1 = rand(1111, 9999);
  $randomNum2 = rand(1111, 9999);

  $randomNum = $randomNum1.$randomNum2;
  $randomNum = md5($randomNum);

  $filename = $randomNum.".png";
  $tempname = $_FILES["gambar"]["tmp_name"];
  $folder = "uploaded/".$filename;

  mysqli_autocommit($koneksi, FALSE);
  mysqli_begin_transaction($koneksi);

  $cekEmail = "SELECT * FROM perusahaan WHERE email = '$email';";
  $hasilCekEmail = mysqli_query($koneksi, $cekEmail);
  $jumlahCekEmail = mysqli_num_rows($hasilCekEmail);
  if ($jumlahCekEmail > 0) {
    echo "<script>alert('EMAIL SUDAH TERPAKAI'); document.location = 'registrasi_perusahaan.php'</script>";
  }else{
    move_uploaded_file($tempname, $folder);
    $sql = "CALL registrasip('$email', '$nama', '$desc', '$alamat',  '$pj', '$pw', '$specs', '$folder',  );";

    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
      echo "<script>alert('Berhasil mendaftarkan akun'); document.location = 'loginp.php'</script>";
      mysqli_commit($koneksi);
      mysqli_autocommit($koneksi, TRUE);
    }else {
      echo "<script>alert('Gagal mendaftarkan akun'); document.location = 'registrasi_perusahaan.php'</script>";
      mysqli_rollback($koneksi);
      mysqli_autocommit($koneksi, TRUE);
    }
  }


}





?>