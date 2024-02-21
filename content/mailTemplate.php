<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML EMAIL TEMPLATE</title>
    <style>

        /* MAIL FUNCTION ONLY WORKS ON LOCALHOST */

        /* BASIC STYLING FOR EMAIL */
        body {
            background: #D3D3D3;
        }

        h3, p {
            font-family: 'Futura', sans-serif;
            color: #212427;
        }

        .center {
            display: flex;
            justify-content: center;
        }

        .full-page-container{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            width: 50%;
            align-items: center;
        }

        .email-text {
            color: #212427;
        }

    </style>
</head>
<body>
<div class="center">

    <section class="full-page-container">

        <!-- LOGIC FOR EMAIL TEMPLATE CAN BE FOUND IN BOOKEVENT.PHP -->

        <h3 class="title">Thank you for your purchase</h3>

        <p class="email-text">You have purchased <?php echo $attendees ?> tickets for the <?php echo $eventTitle ?>  show on the <?php echo $eventDate ?>.
            The total cost for your tickets is £<?php echo $bookingCost ?>. Unfortunately due to a system 
            error payments must be made upon arrival.
            We look forward to seeing you at the rap house for this event. You can
            find more information about the event on our website.
        </p>
    </section>

</div>
    
</body>
</html>