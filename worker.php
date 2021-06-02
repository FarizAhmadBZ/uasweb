<!DOCTYPE html>
<html>

<head>

    <!-- Tambah ikon -->

    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <!--defines page icon -->

    <link rel="stylesheet" type="text/css" href="worker.css">
    <!-- Link to local CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- insert bootstrap -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- insert jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- insert popper -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- insert bootstrap jquery -->

    <title>Workers</title>
    <!-- set title -->

</head>
<body background="images/coding.jpeg">
    <div id="home"></div>
    <nav class="navbar customBackgroundNavbar navbar-expand-sm sticky-top">
        <img src="images/ITWork.png" id="navbarLogo">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="#home">
                    <h4>Profile</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#workers">
                    <h4>Workers</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="login.php">
                    <h4>Logout</h4>
                </a>
            </li>
        </ul>
    </nav>
    <div id="workers" style="height: 40px;"></div>
    <div class="jumbotron bg-transparent text-light text-center">
        <h1 class="display-4">
            Recommendation
        </h1>
        <hr class="my-4">
        <p class="lead">Connect with each other to get a position in your dream company</p>
        <p>
            <a href="#profile">
                <img src="icons/down-arrow.svg" class="scrollDownButton">
            </a>
        </p>
    </div>

    <table id="listOfProfiles" align="center">
    <tr>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/web designer1.jpg" class="workerimage">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h3 class="card-title" style="color: white;">Web Developer</h3>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/desktop.jpg" class="workerimage">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h3 class="card-title" style="color: white;">Desktop Developer</h3>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/mobile.jpg" class="workerimage">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h3 class="card-title" style="color: white;">Mobile Developer</h3>
        </div>
        </div>
    </div>
    </div>
        </td>
    </tr>
    <tr>
    <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/PEXELS2.jpg" class="workerimage">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h3 class="card-title" style="color: white;">IT Consultant</h3>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/database engineer.jpg" class="workerimage">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h3 class="card-title" style="color: white;">Database Engineer</h3>
        </div>
        </div>
    </div>
    </div>
        </td>
    </tr>
    </table>
    <div id="workers" style="height: 40px;"></div>
    <div class="jumbotron bg-transparent text-light text-center">
        <h1 class="display-4">
            Recommended Company
        </h1>
        <hr class="my-4">
        <p class="lead">Choose your position in best company</p>
        <p>
            <a href="#profile">
                <img src="icons/down-arrow.svg" class="scrollDownButton">
            </a>
        </p>
    </div>
    <table id="listOfProfiles" align="center">
    <tr>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/gojek.jpg" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Gojek Indonesia</h5>
        <p class="card-text" style="color: white;">Gojek (sebelumnya ditulis GO-JEK) merupakan sebuah perusahaan teknologi asal Indonesia yang melayani angkutan melalui jasa ojek. </p>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/tokopedia.jpg" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Tokopedia Indonesia</h5>
        <p class="card-text" style="color: white;">Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring dan mendukung UMKM yang ada di Indonesia.</p>
        </div>
        </div>
    </div>
    </div>
        </td>
       <td>
       <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/sagara.jpg" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Sagara Technology</h5>
        <p class="card-text" style="color: white;">Sagara Technology merupakan sebuah perusahaan teknologi yang bergerak di bidang pengembangan website dan aplikasi. </p>
        </div>
        </div>
    </div>
    </div>
    </tr>
<tr>
<td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/garena.jpg" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Garena Indonesia</h5>
        <p class="card-text" style="color: white;">Garena adalah sebuah platform hiburan digital, yang mengembangkan dan mempublikasikan kontan digital PC dan peranti bergerak daring di Asia Tenggara dan Taiwan. </p>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/bukalapak.png" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Bukalapak Indonesia</h5>
        <p class="card-text" style="color:white;">Bukalapak merupakan salah satu perusahaan e-commerce di Indonesia yang bertujuan untuk membantu UMKM mengembangkan bisnis mereka. </p>
        </div>
        </div>
    </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="row g-0">
         <div class="col-md-4">
             <img src="images/lintasarta.jpg" class="workerimage2">
         </div>
         <div class="col-md-8">
         <div class="card-body">
         <h5 class="card-title" style="color: white;">Lintasarta Indonesia</h5>
        <p class="card-text" style="color: white;">Lintasarta (PT Aplikanusa Lintasarta) adalah perusahaan Indonesia yang bergerak di bidang penyedia jasa komunikasi data, internet & IT Services. </p>
        </div>
        </div>
    </div>
    </div>
        </td>
</tr>
</body>
</html>