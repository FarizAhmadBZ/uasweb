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
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
       <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
    </tr>
    <tr>
    <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
            </a>
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
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/gojek.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
        <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/gojek.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
       <td>
        <div id="profile" align="left">
        <div class="workerimagecontainer" align="center">
            <a href="https://github.com/muhamadariq-09" target="_blank">
            <img src="images/gojek.jpg" alt="Avatar" class="workerimage">
            </a>
        </div>
    </div>
        </td>
    </tr>
</body>
</html>