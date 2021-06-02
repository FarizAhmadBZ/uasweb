<?php

	session_start();
	echo $_SESSION['loggedin']."<br>";
    $id = $_SESSION['id']."<br>";
    echo $_SESSION['user']."<br>";

    echo $id;

?>