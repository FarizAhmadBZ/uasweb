<?php

    session_start();

    if ($_SESSION['loggedin'] == "true") {
        if($_SESSION['tipeAkun'] == "worker") {
            $urlProfil = "profile.php";
            }
            elseIf($_SESSION['tipeAkun'] == "company"){
            $urlProfil = "profilep.php";
            }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Engineers</title>

    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <!--defines page icon -->

    <link rel="stylesheet" type="text/css" href="tampilworker.css">
    <!-- Link to local CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- insert bootstrap -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- insert jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- insert popper -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- insert bootstrap jquery -->

</head>
<body background="images/coding.jpeg">

    <div id="home">
    <nav class="navbar customBackgroundNavbar navbar-expand-sm sticky-top">
        <img src="images/ITWork.png" id="navbarLogo">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo $urlProfil;?>">
                    <h4>Profile</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="worker.php">
                    <h4>Workers</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="logout.php">
                    <h4>Logout</h4>
                </a>
            </li>
        </ul>
    </nav>
    <center><h2 style="color: white;">OUR DATABASE ENGINEERS</h2></center>
    
    <table class="table table-hover" style="color: white;">
    <thead>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Domisili</th>
        <th>Links</th>
      </tr>
    </thead>
        <?php
        
            include "koneksi.php";
            $sql = "select * from showdatabase";
            $query = mysqli_query($koneksi, $sql);
            while($dataWorker = mysqli_fetch_assoc($query)){
            ?>
            <tbody>
           <tr> 
                <td><img src="<?php echo $dataWorker['gambar']; ?>" class="workerimage2"></td>
                <td><h3 class="card-title" style="color: white;"><?php echo $dataWorker['nama']; ?></h3></td>
                <td><p class="card-text" style="color: white;"><?php echo $dataWorker['usia']; ?></P></td>
                <td><p class="card-text" style="color: white;"><?php echo $dataWorker['domisili']; ?></p></td>
                <td>
                    <p><a href="<?php echo $dataWorker['link_github']; ?>">To Github</a></p>
                    <p>
                        <form action="profiles.php" method="post">
                            <input type="hidden" name="idProfile" value="<?php echo $dataWorker['id']; ?>">
                            <input type="submit" name="seeProfile" value="See profile">
                        </form>
                    </p>
                </td>
           </tr>
            </tbody>    
                
            <?php
            }
        ?>

    </table>
    </div>
</body>
</html>

<?php
    }
    else{
        header("location:login.php");
    }
?>