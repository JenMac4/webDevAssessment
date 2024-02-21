<?php

    

    //error reporting
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);


    require_once "function.php";

    //VARIABLES TO CHECK AND DISPLAY POP-UPS
    $loginCheck=0;
    $incorrectCheck=0;
    $insufficientData=0;


    if($_SERVER['REQUEST_METHOD'] =='POST'){

        //connect to our db
        include "connect.php";

        //using a post method to insert data to db
        $email=$_POST['email'];

        $email = securityChecksString($email);
        $password = $_POST['password'];
        $password = securityChecksString($password);

        $sql="SELECT customerID, password_hash FROM customers WHERE customer_email = ?";


        //PREPARED STMT
        $stmt = mysqli_prepare($con,$sql);

        mysqli_stmt_bind_param($stmt, "s", $email);

        mysqli_stmt_execute($stmt);

        $queryResult = mysqli_stmt_get_result($stmt);


        
        $userRow = mysqli_fetch_assoc($queryResult);



        //HASH PASSWORD
        
        if(!$userRow){
            $insufficientData=1;
        }
        else if($userRow){
            $passwordHash = $userRow['password_hash'];
            
            //IF USER LOGS IN START SESSION
            if(password_verify($password, $passwordHash)){
    
                $loginCheck = 1;

                //close db connections
                $stmt->close();
                $con->close();

                //start user session and initialise session vars
                session_start();
                $_SESSION['logged-in'] = true;
                $_SESSION['customer_email'] = $email;
                $_SESSION['customerID'] = $userRow['customerID'];

                //generate token to prevent csrf 
                $_SESSION['token'] = bin2hex(random_bytes(16));
                


                header('location:index.php');
            }
            else {
                $incorrectCheck=1;
            }

        }
        else {
            echo mysqli_error($con);
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>

    <!-- <?php

    //POP UP MESSAGES SHOULD A USER MAKE AN INCORRECT ATTEMPT
    if($loginCheck ==1){
        echo '<div class="sign-up-pop-up">successfully logged in</div>';
    }
    if($incorrectCheck ==1){
        echo '<div class="sign-up-pop-up">your username or password is incorrect</div>';
    }
    if($insufficientData ==1){
        echo '<div class="sign-up-pop-up">please fill in both fields</div>';
    }
    ?> -->


    <!-- FORM FRONT-END -->
    <main id="full-login-page">
        <div class="login-container">
            
            <form action="login.php" method ="post" id="login-form">
                <label for="username" class="formLabel">sign in</label><br>
                <input type="email" placeholder="email" class="email" name="email"><br>
                <input type="password" placeholder="password" class="password" name="password">
                      
                <button id="loginButton">log in</button>
                <a href="signUp.php" id="signUpLink">don't have an account? sign up here</a>
                <?php

                if($loginCheck ==1){                      
                    echo '<div class="sign-up-pop-up">successfully logged in</div>';
                }
                if($incorrectCheck ==1){                      
                     echo '<div class="sign-up-pop-up">your username or password is incorrect</div>';
                }

                if($insufficientData ==1){
                    echo '<div class="sign-up-pop-up">please fill in both fields</div>';
                }
                ?>
            </form>

        </div>
    </main>
    
</body>
</html>