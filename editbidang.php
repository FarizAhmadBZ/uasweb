<?php
    session_start();
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
    <title>Edit Bidang</title>
    <link href="registrasi.css" rel="stylesheet">
</head>
<body>
<?php
	
	include "koneksi.php";

    $id = $_SESSION['id'];

    $query = "SELECT bidang FROM users WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    $fetched = mysqli_fetch_array($sql);
    $bdg = $fetched['bidang'];
	
?>

    <div class="container">
    <h2>Edit Bidang</h2>
    <form action="simpanbidang.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
            <label>Bidang sebelumnya: <?php echo $bdg;?></label><br>
            <label>Pilih Bidang :</label>
            <!-- <select class="form-select form-select-sm form-control" name="editbidang" required>
                <option value="">Pilih Bidang</option>
                <option value="Web Developer">Web Developer</option>
                <option value="Desktop Developer">Desktop Developer</option>
                <option value="Mobile Developer">Mobile Developer</option>
                <option value="IT Consultant">IT Consultant</option>
                <option value="Database Engineer">Database Engineer</option>
            </select> -->
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
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
<?php
    }else{
        header("location:login.php");
    }
?>
