<?php

    if(session_status()==PHP_SESSION_NONE){
        
        session_start();
    }

    // DEBUGGING
    // var_dump($_SESSION);


    //CHECK USER IS LOGGED IN
    if(!isset($_SESSION['logged-in'])){
        header('location: login.php');
        exit();
    }

    require 'function.php';
    require_once "connect.php";

    //GETS THE RELEVANT EVENT INFORMATION FOR 
    //DYNAMICALLY LOADED CONTENT VIA QUERY PARAM
    if (isset($_GET['eventID'])) {

        $event_id = $_GET['eventID'];
        $event_id = securityChecksString($event_id);
        $sql = 'SELECT * FROM `events` WHERE eventID = ?';

        //avoid injection via url
        $stmt = $con->prepare($sql);
        $stmt-> bind_param('i', $event_id);
        $stmt-> execute();
        $result =$stmt->get_result();

        
        if(!$result){
            echo "Error in getting result";
        }
        else {

            //Declare vars here but initialise in loop

            //VARIABLES do not need to be initialised in
            //php but will do for good coding practice
            $title= '';
            $photo= '';
            $date ='';
            $price = '';
            $description= '';


            while($row = mysqli_fetch_assoc($result)){

                $title = $row['event_title'];
                $photo = $row['event_imagepath'];
                $date = $row['event_date'];
                $price = $row['price_per_person'];
                $description = $row['description'];
            }
    

        }

        
    

    $connect = getConnected();
    $navBar = navBarFunction();
    $footer = footerFunction();

    //repeating query
    // $sql = 'SELECT * FROM `events`';

    //got this line twice now
    // $get_products = $con->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    
    
    <link rel="stylesheet" href="../assets/stylesheets/style.css">

</head>
<body>


    <?php

        echo $navBar;
    ?>

<!-- INFORMATION FOR SPECIFIC GIG -->
<section id="container-individual-gig-page">

    <div class="individual-gig-listing">
        <div class="individual-gig-image">
            <div class="overlay">


                <img src="<?php echo $photo ?>" alt="rapper kevin abstract performing at a gig alongside big rab" class="individual-gig-image-style"> 
            </div>
            
        </div>

        <div class="individual-gig-title">
            <h3><?php echo $title ?></h3>
        </div>

        <div class="individual-gig-about">

            <p class="description-gig-page"><?php echo $description ?></p>

            <p>£<?php echo $price?></p>

            <button class="booking-button gig-page-button"> <a href="bookEvent.php?eventID=<?php echo $event_id; ?>">book tickets</a></button>

        </div>

    </div>
</section>

<!-- DYNAMICALLY LOADED OTHER EVENT CARDS -->

<!-- <section class="flex-box-card-gallery"> -->
<section class="flex-box-card-gallery">

        <h3 class="gig-page-sub-title">other events</h3>
    <!-- <div class="flex-box-card-container"> -->
    <div class="grid-card-container">

    <!-- THIS IS WHERE CARDS SHOULD GO -->

    <?php

        if(isset($_GET['eventID'])){


        // USE A FOR LOOP TO GET THREE MORE EVENTS

        //INITIALISE LOOP CONDITIONS
        $start = (int) $_GET['eventID'] + 1;
        
        if($start >= 7){
            $start = 1;
        }
        
        $end = $start + 3;
    

        //START LOOP
        for($i=$start; $i<$end; $i++){

        $event_id_card = $_GET['eventID'];
        $currentItem = $i;
        $sqlCard = 'SELECT * FROM `events` WHERE eventID = ?';

        $stmtCard = mysqli_stmt_init($con);

        if(!mysqli_stmt_prepare($stmtCard, $sqlCard)) {
            echo "sql statement failure";

        }

        else {

            //bind parameters to placeholders

            mysqli_stmt_bind_param($stmtCard, "i",  $currentItem);
            mysqli_stmt_execute($stmtCard);
            $resultCard= mysqli_stmt_get_result($stmtCard);

            while ($gigCard= mysqli_fetch_assoc($resultCard)){



                //LOAD AND DISPLAY CONTENT
                $cardTitle= $gigCard['event_title'];
                $cardImage=$gigCard['event_imagepath'];
                $cardGigDate=date('d/m/Y', strtotime($gigCard['event_date']));
                $cardCost =$gigCard['price_per_person'];
                $cardBio = $gigCard['description'];
    
                echo'<div class="gig-listing-card gig-page-gig-listing-card" >';
                echo '<div class="act-data"> ';
                echo'<h3 class="act-title">'. $cardTitle . '</h3>';
                echo '<h5 class= "act-date"> ' . $cardGigDate . '</h5> ';
                echo '<h5 class="act-price">' . '£'.$cardCost. '</h5>';
                echo' </div>';
                echo '<div class=" act-bio-data gigPageBio">';
                echo'<p class ="act-bio ">' . $cardBio . '</p> ';
                echo '<button class="booking-button"><a href="gigPage.php?eventID='. $gigCard['eventID'] . '">view event</a></button>';
                echo'</div>';
                echo'</div>';
            }

        }


        

            }
        }
    }
    $stmt->close();
    $stmtCard->close();
    $con->close();

    ?>

    </div>
</section>

</body>


<?php

    echo $footer;
?>

<script src="../assets/jsScripts/lightmode.js"></script>

