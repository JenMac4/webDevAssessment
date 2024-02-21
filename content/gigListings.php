<?php

    if(session_status()== PHP_SESSION_NONE){

        session_start();
    }

     //DEBUGGING STATEMENTS
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    // debugging
    // var_dump($_SESSION);

   
    require_once "connect.php";
    require_once "function.php";

    //GET EVENTS
    $sql = "SELECT * FROM `events`";

    $get_events = $con->query($sql);



    //DECLARE PHP VARIABLES
    $footer = footerFunction();
    $navBar = navBarFunction();

    $headerBannerTextMain = 'gig listings.';
    $headerBannerTextSub = '';
    $headerBanner = bannerFunction($headerBannerTextMain, $headerBannerTextSub);


    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Listings</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>


    <main id="whole-page-container">

       

        <?php

            echo $navBar;
            echo $headerBanner;

        ?>


       <div id="button-container">
           <button id="selectAll" class="gig-listing-btn">all</button>
            <button id="janButton" class="gig-listing-btn">january</button>
            <button id="febButton" class="gig-listing-btn">february</button>
            <button id="marButton" class="gig-listing-btn">march</button>
       </div>

       <!-- GIG LISTINGS GRID -->


        <div id="gig-listings-container">

        <!-- PHP INJECTS DATA FROM OUR SQL TABLE -->
        <?php

          while($row = mysqli_fetch_assoc($get_events)){
            
          
        ?>
       
       <div class="gig-listing-card" event_month='<?php echo $row['event_month']?>'>
       <div class="act-data">
           <h3 class="act-title"><?php echo $row["event_title"]; ?></h3>
           <h5 class="act-date"><?php echo date('d/m/Y', strtotime($row["event_date"]))?></h5>
           <h5 class="act-price"><?php echo '£' . $row["price_per_person"]?></h5>
       </div>
       <div class="act-bio-data">
           <p class="act-bio"><?php echo $row["description"]?></p>
           <button class="booking-button"><a href="gigPage.php?eventID=<?php echo $row['eventID']; ?>">view event</a></button>

       </div>
   </div>
 
        <?php

            
          }  

          $get_events ->close();
        $con->close();
        ?> 

       </div>


    </main>

    <?php
        echo $footer;
    ?>
    
    <script src="../assets/jsScripts/lightmode.js"></script>
    <!-- BELOW IS THE SCRIPT TAG FOR INJECTING THE JSON DATA -->
    <!-- THIS DOCUMENT NOW IS RESONSBILE FOR HANDLING BUTTON FUNCTIONALITY -->
    <!-- DO NOT DELETE!! -->
    <script src="../assets/jsScripts/fetch.js"></script>
</body>
</html>