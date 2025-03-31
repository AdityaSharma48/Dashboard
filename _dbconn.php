<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php_project";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        echo "Disconnected";
    }
?>