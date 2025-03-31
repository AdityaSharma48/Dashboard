<?php 
    session_start();
    session_unset();
    session_destroy();
    header("location: http://localhost/unit1/Project/index.php");
?>  