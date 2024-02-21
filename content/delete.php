<?php

    //error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (session_status() == PHP_SESSION_NONE){

        session_start();
    }

    require_once 'connect.php';
    require_once 'function.php';

    //get booking id from url query param
    if(isset($_POST['bookingID'])){

      
        //pass token and id from hidden form
        $bookingID = $_POST['bookingID'];
        $verifyToken = $_POST['token'];

        if(!isset($_SESSION['token']) || ($_POST['token'] !== $_SESSION['token'])){
            die('unsuccessful token validation');
        }

        $bookingID = securityChecksString($bookingID);

        $sql = 'DELETE FROM `booking` WHERE bookingID = ?';
        // $result=mysqli_query($con, $sql);
        
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $bookingID);

        $result = $stmt->execute();
        
        
        
        if($result){
            header('location:myEvents.php');

        }
        else {
            echo "error";
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <h3>delete</h3>
</body>
</html>