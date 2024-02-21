<?php

    require_once 'connect.php';
    require_once 'function.php';

    if (session_status() == PHP_SESSION_NONE){

        session_start();
    }

    // var_dump($_SESSION);

    $navBar = navBarNoSwitch();
    $footer = footerFunction();
    $noEventBooked = '';
    $conn = getConnected();

    //DEBUGGING STATEMENTS
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    if(isset($_SESSION['customerID'])){

        $customerID = (int) $_SESSION['customerID'];
    
    
    
        //FETCH ALL EVENTS THAT A CUSTOMER HAS BOOKED FROM THE BOOKINGS TABLE
        function getEvents($con, $customerID) {
            
            echo $customerID;
            //JOIN TABLES TO RETRIEVE ALL RELEVANT DATA
            $sql='SELECT booking.bookingID, booking.customerID, booking.number_people, booking.total_booking_cost, booking.booking_notes, events.event_title, DATE(events.event_date) AS event_date
                FROM booking
                INNER JOIN events ON booking.eventID = events.eventID
                WHERE booking.customerID = ?';
    
            
    echo "SQL Query: " . $sql . "<br>";

            //prepare statemnt
            // $stmt=mysqli_prepare($con,$sql);
            // mysqli_stmt_bind_param($stmt,'i',$customerID);
            // mysqli_stmt_execute($stmt);
            // $result =mysqli_stmt_get_result($stmt);
    
            // var_dump($customerID);
            $stmt= $con->prepare($sql);
            $stmt -> bind_param('i', $customerID);
            $stmt-> execute();
            $result = $stmt-> get_result();
            // if ($stmt->errno) {
            //     echo "Error executing statement: " . $stmt->error;
            // }
            
    
    
            // var_dump($result);
    
    
            $personalGigs = array();
            while($row= mysqli_fetch_assoc($result)){

                $holdingID = (int) $row['customerID'];
                $customerID = (int) $customerID;
                
                // $customerSomething = $_SESSION['customerID'];
                // if($holdingID == $customerID){
                    
                //     echo 'customerID: ' . $customerID;
                //     echo 'row: ' . $row['customerID'];
                //     // echo 'hello';
                // }
                $personalGigs[] = $row;
    
            }
            // var_dump($personalGigs);
            return $personalGigs;
        }
        
        $events = getEvents($con, $customerID);
        // var_dump($events);
    
        // if(!$events){
    
        //     $noEventBooked = 'you have no booked events yet';
        // }
    
        //function for displaying table of events
        function getTable($con, $events){
    
            $tableData='';
            $events = getEvents($con, $events);
            foreach($events as $event){
    
                $tableData.= '<tr><td class="tableData">' .$event['event_title']. '</td>';
                $tableData .= '<td class="tableData table-date">' .$event['event_date'] . '</td>';
                $tableData .= '<td class="tableData">'. $event['number_people'] . '</td>';
    
                $tableData.= '<td class="tableData">' . $event['total_booking_cost'] . '</td>';
                $tableData .= '<td class="tableData">'. $event['booking_notes'] . '</td>';
                $tableData .= '<td class="tableData delete-container"> <button class="delete-button"><a href = "delete.php?bookingID=' .$event['bookingID']. '">delete</a></button></td></tr>';
                
            }
            return $tableData;
        }
    
        $userEvents = getTable($con, $events);
    

    }    





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your events</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>

        <?php
            echo $navBar;
            echo $customerID;
        ?>
    <main id="full-login-page">

        
        <div class="login-container table-container">
            
            
            <table border="1" id="table">
                <thead>
                    <tr>
                        <!-- table headers -->
                        <th>event title</th>
                        <th class="table-date">date</th>
                        <th>number of tickets</th>
                        <th>cost (payable on arrival)</th>
                        <th>additional notes</th>
                        <th>unbook event</th>
        
                    </tr>
                        
        
        
                </thead>
        
                <tbody>

                    <!-- inject table here -->
        
                    <?php echo $userEvents?>
                
                </tbody>
        
        
            </table>
            <?php

              
                if(!$events){
                    echo "<h3>you have no booked events yet</h3> ";
                    // $noEventBooked = 'you have no booked events yet';
                }
            ?>
                <!-- <h3><?php echo $noEventBooked ?></h3> -->
                <!-- <h3>check your spam folder for email confirmation</h3> -->
        </div>
    </main>


    <script src="../assets/jsScripts/lightmode.js"></script>

    <script>
        const deleteButton = document.querySelectorAll(".delete-button");

        deleteButton.forEach((element) => {
            element.addEventListener('click', () => {
                alert("Deleting this event means you will have to rebook");
            })
        })


    </script>
    
</body>

<?php
    echo $footer;
?>
</html>