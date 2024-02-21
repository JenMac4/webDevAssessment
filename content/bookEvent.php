<?php

    if (session_status()==PHP_SESSION_NONE) {
    session_start();
    }

    
    //DEBUG STATEMENTS
    // var_dump($_SESSION);
    // var_dump($_GET);
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    $checkAttendees = 0;

    //If user isn't logged in redirect to homepage
    if(!isset($_SESSION['logged-in'])){
        header('location:login.php');
        exit();
    }
    

    require_once 'function.php';
    require_once 'connect.php';

    //GETTER FUNCTION FOR GETTING EVENT PRICE

    function getEventPrice($event_id) {

        //$con needs to be within the scope of this function
        global $con; 
    
        $sql = 'SELECT * FROM `events` WHERE eventID = ?';

        $stmt = $con->prepare($sql);
        $stmt ->bind_param( 'i', $event_id);
        $stmt ->execute();

        $result = $stmt->get_result();
    
        $row = $result->fetch_assoc();
    
        if ($row) {
            return (int)$row['price_per_person'];
        }
    
        
        return 0;
    }


    //LOGIC FOR RETRIEVING EVENT DATA BASED ON THE QUERY PARAM
    if(isset($_GET['eventID'])){

        $event_id = $_GET['eventID'];
        $event_id = securityChecksString($event_id);
        $_SESSION['eventID'] = $event_id;


        $sql = 'SELECT * FROM `events` WHERE eventID = ?';
        $stmt = $con->prepare($sql);
        $stmt -> bind_param('i', $event_id);
        $stmt-> execute();
        $result = $stmt->get_result();

        $row= $result->fetch_assoc();

        if($row){
            $eventTitle = $row['event_title'];
            $eventPrice = (int) $row['price_per_person'];


        }
    }
    else {
        //make error page here
        // die('unsuccessful token validation')
    }

    
    //GET CUSTOMER DATA SO IT CAN BE AUTO FILLED IN TABLE
    if(isset($_SESSION['logged-in'])){

        $customer_email=$_SESSION['customer_email'];
        // $customer_ID = $_SESSION['customerID'];


        $sqlCustomer = ' SELECT * FROM `customers` where customer_email = ?';
        $stmtCustomer =$con->prepare($sqlCustomer);
        $stmtCustomer -> bind_param('s', $customer_email);
        // $stmtCustomer -> bind_param('i', $customer_ID);
        $stmtCustomer->execute();

        $customerData = $stmtCustomer->get_result();
        $customerRow = $customerData->fetch_assoc();

        if(!$customer_email){
            echo 'no customer data found';
        }
        else {

            $firstName = $customerRow['customer_forename'];
            $secondName = $customerRow['customer_surname'];
            $email = $customerRow['customer_email'];
            $customerID = $customerRow['customerID'];

        }
        
    }

    //GET EVENT PRICE
    if(isset($_POST['number'])){
        $numOfTickets = (int) $_POST['number'];
        $event_id = $_GET['eventID'];
        $eventPrice = getEventPrice($event_id);
        $totalPrice = $numOfTickets * $eventPrice;



        // echo $eventPrice;
        // echo $totalPrice;
    }

    //LOGIC FOR BOOKING TICKETS
    if(isset($_POST['bookTickets'])){


        //verify token before allowing to delete
        if(!isset($_SESSION['token']) || ($_POST['token'] !== $_SESSION['token'])){
            die('unsuccessful token validation');
        }


        // $event_id = $_GET['eventID'];
        $event_id = $_POST['eventID'];
        
        
        
        $attendees = $_POST['number'];
        $bookingCost = $_POST['totalPrice'];
        $additionalNotes = $_POST['textArea'];
        $additionalNotes = securityChecksString($additionalNotes);
        
        //check if attempting to buy 0 tickets
        if($attendees == 0){
            $checkAttendees =1;
            $event_id = $_POST['eventID'];


        }

        else{

            //INSERT INTO BOOKING TABLE
            $sqlInsertDataIntoBookings = 'INSERT INTO `booking` (eventID, customerID, number_people, total_booking_cost, booking_notes) VALUES (?, ?, ?, ?, ?)';
    
            $stmtInsertDataIntoBookings = $con->prepare($sqlInsertDataIntoBookings);
            $stmtInsertDataIntoBookings -> bind_param('iiids', $event_id, $customerID, $attendees, $bookingCost, $additionalNotes);
            $stmtInsertDataIntoBookings ->execute();
    
    
            //FUNCTIONALITY FOR EMAILING CUSTOMER AUTOMATICALLY

            //MAIL FUNCTIONALITY NOT SUPPORTED ON NUWEBSPACE SERVER
    
            $email=$_SESSION['customer_email'];
            $to = $email;
            $subject = "Thank you for booking";
    
            $headers = array(
                'MIME-Version' => '1.0',
                'Content-type' => 'text/html;charset=UTF-8',
                'From' => 'jmacrory5@gmail.com',
                'Reply-To' => 'jmacrory5@gmail.com'
            );
    
            $sqlMail = 'SELECT event_title, DATE(event_date) AS event_date FROM `events` WHERE eventID = ?';
            $stmtMail = $con->prepare($sqlMail);
            $stmtMail->bind_param('i', $event_id);
            $stmtMail-> execute();
    
            $stmtMail-> bind_result( $eventTitle, $eventDate);
            $stmtMail->fetch();
    
            ob_start();
    
            include('mailTemplate.php');
            $message = ob_get_contents();
            ob_end_clean();
    
            $sent = mail($to, $subject, $message, $headers);
    
            if(!$sent){
                echo 'mail not sent';
            }

            $stmt->close();
            $stmtMail->close();
            $stmtInsertDataIntoBookings->close();
            $stmtCustomer->close();
            $con -> close();
            
            header('location: index.php');

        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book event</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>

    
    <main id="full-login-page">
        <div class="login-container">


            
            

            <!-- TICKET PURCHASING FRONT END -->

            <form action="bookEvent.php?eventID=<?php echo$event_id; ?>" method ="post" id="login-form">
                <h5 class="book-tickets-sub-heading">book tickets for:</h5>
                <h3 class="book-event-heading-booking-page"><?php echo $eventTitle ?></h3>
               
                <!-- <label for="event-title" class="formLabel"><?php echo $eventTitle ?></label><br> -->

                <input class="input" type="text" name="customer-forename" value="<?php echo $firstName; ?>" readonly>
                <input class="input" type="text" name="customer-surname" value="<?php echo $secondName?>" readonly>
                <input class="input" type="email" value ="<?php echo $email?>"class="form-box" name="email" readonly><br>
                
                <div class="matching-pairs">

                    <label for="number" class="text-label text-label-num">number of tickets</label><br>
                    <select name="number" id="dropdown" onchange="totalTicketPrice()">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <br>
                </div>

                <div class="matching-pairs cost-pair">

                    <label for="totalPrice" class="text-label text-label-num">Price: £</label><br>

                    <input class="cost-box"  type="number" id="fullPrice"name="totalPrice" value="0" readonly>

                </div>



                <label for="textArea" class="text-area-label">additional info:</label>
                <textarea name="textArea" rows="40" cols="20" placeholder="please enter any additional information here" class="form-box"></textarea>

                
                <input type= "hidden" name ="eventID" value="<?php  echo $event_id;?>">            
                <input type= "hidden" name ="token" value="<?php  echo $_SESSION['token'];?>">            
                
                <button name="bookTickets"type="submit" id="loginButton">book tickets</button>
            </form>
                <?php
                //POP UP FOR NO TICKETS 
                if($checkAttendees ==1){
                    
                    echo '<div class="sign-up-pop-up">cannot book 0 tickets</div>';
                }
            ?>

        </div>
    </main>
    
</body>

<script>
    

    //keep js in this file so we can pull php variables
    const eventPrice = <?= $eventPrice ?>;
    console.log(eventPrice);

    let totalTicketPrice = () => {

        const numOfTickets = parseInt(document.getElementById("dropdown").value);
        console.log(eventPrice);
        let totalPrice = numOfTickets * eventPrice;
        document.getElementById("fullPrice").value = totalPrice;
    };


</script>
</html>