<?php

    //Note: issues with connection function in
    //function.php. Use this file to connect to db

    // variable names

    //XAMPP LOGIN DETAILS
    $HOSTNAME ='localhost';
    $USERNAME = 'root';
    $PASSWORD ='';
    $EMAIL = 'test@jentesting.com';
    $DATABASE = 'rapHouse';
    
    //NUWEBSPACE LOGIN DETAILS
    // $HOSTNAME ='nuwebspace_db';
    // $USERNAME = 'w23039046';
    // $PASSWORD ='Granite123';
    // $DATABASE = 'w23039046';

    $con="";
    $con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

    
    if(!$con){
        die(mysqli_error($con));
    }
    
?>