<?php

// Start or resume the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'connect.php';
require_once 'function.php';

$navBar = navBarNoSwitch();
$footer = footerFunction();
// $noEventBooked = '';
$conn = getConnected();

 //DEBUGGING STATEMENTS
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Check if a customer is logged in
if (isset($_SESSION['customerID'])) {

    //CSRF CHECK FOR TOKEN
    //NOTE: This is insufficient token
    //checking along but there is additional
    //checking in delete.php to verify the token
    if(!isset($_SESSION['token'])){
        die('unsuccessful token validation');
    }

    //SOME ISSUES WITH BINDING SO CASTING TYPE
    $customerID = (int) $_SESSION['customerID'];

    // Fetch all events that a customer has booked from the bookings table
    function getCustomerEvents($con, $customerID)
    {
        // JOIN TABLES TO RETRIEVE ALL RELEVANT DATA
        $sql = 'SELECT booking.bookingID, booking.number_people, booking.total_booking_cost, booking.booking_notes, events.event_title, DATE(events.event_date) AS event_date
                FROM booking
                INNER JOIN events ON booking.eventID = events.eventID
                WHERE booking.customerID = ?';

        $stmt = $con->prepare($sql);
        $stmt ->bind_param( 'i', $customerID);
        $stmt ->execute();

        $result = $stmt->get_result();

        $personalGigs = array();

        while ($row = mysqli_fetch_assoc($result)) {

            $personalGigs[] = $row;
        }

        $stmt ->close();

        return $personalGigs;
    }

    $events = getCustomerEvents($conn, $customerID);

    $conn -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Events</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>
    <?php
    echo $navBar;
    // echo $customerID;
    ?>
    <main id="full-login-page">
        <div class="login-container table-container">
            <?php

                // if (isset($customerEvents) && !empty($customerEvents)) {
            ?>
            <table border="1" id="table">
                <thead>
                    <tr>
                        <!-- Table headers -->
                        <th>Event Title</th>
                        <th class="table-date">Date</th>
                        <th>Number of Tickets</th>
                        <th>Cost (Payable on Arrival)</th>

                        <th>Additional Notes</th>
                        <th>Unbook Event</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($events as $event) {
                    ?>
                    <tr>
                        <td class="tableData "> <?php echo $event[ 'event_title'];?></td>
                        <td class="tableData  table-date"><?php echo  date('d/m/Y', strtotime($event['event_date']));?></td>
                        <td class="tableData"><?php echo $event['number_people'];?></td>
                        <td class="tableData"><?php echo '£'.$event['total_booking_cost'] ;?></td>
                        <td class="tableData"><?php echo $event['booking_notes'];?></td>
                            <td class="tableData delete-container">
                                <form action="delete.php" method="post">
                                
                                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                    <input type="hidden" name="bookingID" value="<?php echo $event['bookingID']; ?>">
                                    <button class="delete-button" type="submit">delete</button>
                                        <!-- The styling for this link isn't working properly in safari, works in chrome and firefox -->
                                        <!-- <a class="delete-button" href="delete.php?bookingID=<?php echo $event['bookingID']; ?>">delete</a> -->
   

                                    
                            
                                </form>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php

                //CHECKS FOR EVENTS AND DISPLAYS MESSAGE IF THERE AREN'T ANY
                if(!$events){
                     echo "<h3>you have no booked events yet</h3> ";
                // $noEventBooked = 'you have no booked events yet';
                 }
        
            ?>
        </div>
    </main>

    <script src="../assets/jsScripts/lightmode.js"></script>
    <script>

        //FUNCTIONALITY FOR POP UP ALERT
        const deleteButton = document.querySelectorAll(".delete-button");

        deleteButton.forEach((element) => {
            element.addEventListener('click', () => {
                alert("Deleting this event means you will have to rebook");
            })
        })

        const oldEvie = 1;
        const newYearNewEvie (oldEvie) => {
            return oldEvie * eatingLunch;
        }
    </script>
</body>
<?php
echo $footer;
?>
</html>
