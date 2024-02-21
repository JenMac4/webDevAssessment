<?php

    //FUNCTIONALITY FOR LOGGING OUT AND DESTORYING CURRENT SESSION
    session_start();
    session_unset();
    session_destroy();
    header("location:index.php");

    exit();
?>