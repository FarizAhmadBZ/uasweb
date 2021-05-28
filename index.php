<!DOCTYPE html>
<html>

<head>

    <!-- Tambah ikon -->

    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <!--defines page icon -->

    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link to local CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- insert bootstrap -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- insert jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- insert popper -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- insert bootstrap jquery -->

    <title>ITWork</title>
    <!-- set title -->

</head>

<body background="images/coding.jpeg">
    <div id="home"></div>
    <nav class="navbar customBackgroundNavbar navbar-expand-sm sticky-top">
        <img src="images/ITWork.png" id="navbarLogo">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="#home">
                    <h4>Home</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#workers">
                    <h4>Workers</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="login.php">
                    <h4>Login</h4>
                </a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron bg-transparent text-light text-center">
        <h1 class="display-4">
            With ITWork, It works
        </h1>
        <hr class="my-4">
        <p class="lead">Find your IT employee here</p>
        <p>
            <a href="#demo">
                <img src="icons/down-arrow.svg" class="scrollDownButton">
            </a>
        </p>

    </div>
    <!-- Script carousel disini -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/server.jpeg" alt="Database Engineer" class="carouselImages">
                <div class="carousel-caption">
                    <h1>
                        DATABASE ENGINEER
                    </h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/mobileapps.jpeg" alt="Mobile Apps Developer" class="carouselImages">
                <div class="carousel-caption">
                    <h1>
                        MOBILE APPS DEVELOPER
                    </h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/dekstopapps.jpeg" alt="Dekstop Apps Developer" class="carouselImages">
                <div class="carousel-caption">
                    <h1>
                        DESKTOP APPS DEVELOPER
                    </h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/web.jpg" alt="WEB Designer" class="carouselImages">
                <div class="carousel-caption">
                    <h1>
                        WEB DESIGNER
                    </h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/consultant.jpg" alt="IT Consultant" class="carouselImages">
                <div class="carousel-caption">
                    <h1>
                        IT CONSULTANT
                    </h1>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Script carousel selesai disini -->
    <div id="workers" style="height: 40px;"></div>
    <div class="jumbotron bg-transparent text-light text-center">
        <h1 class="display-4">
            Who do we have here?
        </h1>
        <hr class="my-4">
        <p class="lead">Lets check it out now!</p>
        <p>
            <a href="#profile">
                <img src="icons/down-arrow.svg" class="scrollDownButton">
            </a>
        </p>
    </div>

    <div id="profile" align="center">
        <table id="listOfProfiles" align="center">
            <!-- header -->
            <tr class="text-light text-center">
                <th>
                    DATABASE ENGINEER
                </th>
                <th>
                    MOBILE APPS DEVELOPER
                </th>
                <th>
                    DESKTOP APPS DEVELOPER
                </th>
                <th>
                    WEB DEVELOPER
                </th>
                <th>
                    IT CONSULTANT
                </th>
            </tr>

            <!-- Body -->
            <tr>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/database engineer.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Alexander Bent</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/mobile.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Ruben Dostic</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/desktop.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Marcos Thelemans</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/web designer1.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Julia Senvich</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/ITConsul.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Anne Wilhenkins</div>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/PEXELS1.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Shane Li Zhang</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/PEXELS3.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Sergi Antonio</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/PEXELS6.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">James Christoper</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/PEXELS5.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Alberto Diaz</div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="workerimagecontainer" align="center">
                        <a href="https://github.com/muhamadariq-09" target="_blank">
                            <img src="images/PEXELS2.jpg" alt="Avatar" class="workerimage">
                            <div class="workerimageoverlay">
                                <div class="workerimagetext text-light">Emma Jeslyn</div>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <hr>
    <footer class="bg-dark text-light text-center p-3">
        Register yourself at: register@it.work<br> © 2021 Copyright : ITWork
    </footer>
</body>

</html>