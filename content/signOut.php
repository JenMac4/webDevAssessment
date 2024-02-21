<?php

    //DEBUGGING
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //START SESSION
    if(session_status() == PHP_SESSION_NONE){
        
        session_start();
    }
    
    //GET PHP FUNCTIONS
    require_once 'function.php';

    $connection = getConnected();
    $navBar = navBarFunction();
    $header = bannerFunction('are you sure you want to sign out?', "you will need to log back in to purchase events" );
    $footer = footerFunction();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign out</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>
    
    <div id='banner'>
        <h1 id='banner-text-main'>are you sure you want to sign out?</h1>
        
        <h3 class='banner-text-sub'>you will need to log in to book events</h3>

        <form action="logout.php">
            <button class="booking-button sign-out-button">sign out</button>
        </form>
    </div>




</body>
</html>