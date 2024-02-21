<?php

    //VARIABLES FOR CHECKING IF USER/PASSWORD IS VALID
    $signUpSuccessful=0;
    $user=0;
    $passwordCheck =0;
    $insufficientData = 0;

    //DEBUGGING
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    

    if($_SERVER['REQUEST_METHOD'] =='POST'){

        //connect to our db
        include "connect.php";
        require_once "function.php";

        //SANITISE DATA
        $firstName=$_POST['firstName'];
        $firstName = securityChecksString($firstName);
        $secondName=$_POST['secondName'];
        $secondName = securityChecksString($secondName);
        $dateOfBirth=$_POST['dateOfBirth'];
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password=$_POST['password'];
        $password = securityChecksString($password);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        if($firstName == "" || $secondName == "" || $email == "" ) {
            $insufficientData =1;
        }


        

        //check if email address already exists
        $sql="SELECT * FROM `customers` WHERE customer_email = '$email'";

        $data = mysqli_query($con,$sql);

        //CHECKING IF EMAIL ALREADY EXISTS
        if(mysqli_num_rows($data)!=0 ){

            $user=1;
            
            
        }
        //CHECK PASSWORD IS VALID
        else if (strlen($password) < 8  || preg_match('?=.*\d', $password)){
            $passwordCheck=1;
        }

        // }

        //insert user data into customer table
        else {
            $sql="INSERT INTO `customers` (`password_hash`, `customer_forename`, `customer_surname`, `customer_email`, `date_of_birth`) VALUES (?, ?, ?, ?, ?)";
            $stmt= $con->prepare($sql);
            $stmt->bind_param('sssss', $passwordHash, $firstName, $secondName, $email, $dateOfBirth);
            $stmt-> execute();

            

            //START SESSION IF USER SIGN UP IS SUCCESSFUL
            if($stmt){
                $signUpSuccessful=1;

                session_start();
                $_SESSION['email'] = $email;

                $stmt->close();
                $con->close();
                //redirect to login page
                header('location:signUpRedirect.php');
            }
            else {
                die(mysqli_error($con));
            }
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>


    <main id="full-login-page">
        <div class="login-container">
            
            <form action="signUp.php" method="post" id="login-form">
                <label for="username" class="formLabel">sign up</label><br>
                

                <input type="text" placeholder="first name" class="form-box" name="firstName"><br>
                <input type="text" placeholder="surname" class="form-box" name="secondName"><br>
                <input type="email" placeholder="email address" class="email" name="email"><br>
                <input type="password" placeholder="password" class="password" name="password">
                <input type="date" placeholder="date of birth" class="dateOfBirth form-box" name="dateOfBirth"><br>
                      
                <button id="loginButton">register</button>
                

            </form>

    <!-- pop up notifications for unsuccessful signups -->
    <?php

    if($user ==1){
        echo '<div class="sign-up-pop-up">email already registered</div>';
    }
    if($passwordCheck ==1){
        echo '<div class="sign-up-pop-up">password should be 8 characters long and contain a number</div>';
    }
    if($insufficientData ==1){
        echo '<div class="sign-up-pop-up">please enter all fields</div>';
    }

    ?>

        </div>
    </main>
    
</body>
</html>