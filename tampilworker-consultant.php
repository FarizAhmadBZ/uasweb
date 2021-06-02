<?php

	session_start();

	if ($_SESSION['loggedin'] == "true") {
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>IT Consultants</title>

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

	<div id="home"></div>
    <nav class="navbar customBackgroundNavbar navbar-expand-sm sticky-top">
        <img src="images/ITWork.png" id="navbarLogo">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php">
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
    <center><h2>OUR IT CONSULTANTS</h2></center>
    
    <table>
    	
    	<?php
    		include "koneksi.php";
    		$sql = "select * from showconsultant";
    		$query = mysqli_query($koneksi, $sql);
    		while($dataWorker = mysqli_fetch_assoc($query)){
    		?>
				<table>
    			<tr>
    				<td>
						
					<div id="profile" align="left">
                	<div class="row g-0">
						<div class="col-md-4">
                        	<img src="<?php echo $dataWorker['gambar']; ?>" class="workerimage2">
						</div>
					<div class="col-md-8">
                    <div class="card-body">
					<h3 class="card-title" style="color: white;"><?php echo $dataWorker['nama']; ?></h3>
					<p class="card-text" style="color: white;"><?php echo $dataWorker['usia']; ?></P>
					<p class="card-text" style="color: white;"><?php echo $dataWorker['domisili']; ?></p>
    					<a href="<?php echo $dataWorker['link_github']; ?>">To Github</a>
					</div>
					</div>
					</div>
    				</td>
    			</tr>
				</table>
    		<?php
    		}
    	?>

    </table>

</body>
</html>

<?php
	}
	else{
		header("location:login.php");
	}
?>