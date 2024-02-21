<?php

    //CHECK IF SESSION HAS STARTED, WILL BE IGNORED IF IT HAS
    if(session_status() == PHP_SESSION_NONE){
        session_start();

    }

    //debuggin
    // var_dump($_SESSION);

    //REQUIRE PHP FUNCTIONS FOR USE 
    require_once 'function.php';

    $connection = getConnected();
    $navBar = navBarFunction();
    $header = bannerFunction('the rap house.', "south-west Scotland's premier venue for hip-hop" );
    $footer = footerFunction();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the rap house.</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <main id="whole-page-container">

       

        <?php

            echo $navBar;
            echo $header;
        ?>

        
        <!--about section-->
        <section id="about">
            <h3 class="about-header">our soundsystem + bars = unforgetable nights</h3>
            
            <div class="sub-section-1">
                <h3 class="about-title-section">venue</h3>
                <p class="about-text">Formerly Dumfries Jazz Club, our signature basement venue had a rich history prior to it's transformation. Originally opening as a venue in the early 60s the rap house purchased the venue with the help of our funders in 2017. Since then the yester-decade aesthetic has been transformed into our signature basement venue that is synonymous with our brand today. Fitted with a powerful soundsystem, accessible viewing platform and drinks bar our basement venue has become a cultural staple of the local music scene not just in Dumfries but across the entirety of South-West Scotland. </p>
            </div>
            
            <div class="sub-section-2">
                
                <h3 class="about-title-section">about us</h3>
                <p class="about-text">Following our launch in 2017, the rap house has became a
                    staple of the national Scottish music scene. Showcasing some
                    of Scotland's hardest hitting rappers, our basement venue has
                    served as a platform for the hardest hitting bars you can find.
                    Fitted with a state of the art 2500 Watt state of the art
                    soundsystem, our speakers deliver rumbles straight to your heart
                    while offering an unparalleled high end presence that preserves
                    every syllable. </p>
                </div>
                
                <div class="sub-section-3">
                    <h3 class="about-title-section">zero tolerance for hate</h3>
                    <p class="about-text">Music is for everyone and that is a core value at the heart of our venue. Although historically hip-hop has at times been a lyrical perpetrator for misogyny and homophobia we pride ourselves on being a safe space. We have a ZERO tolerance policy towards any form of discrimination including but not limited to racism, homophobia, transphobia, sexism, sexual assault/harassment and ableism. If you feel unsafe for any reason please speak with a member of staff and we will have any perpetrators of this behaviour removed from our premises  </p>
                    
                </div>
                
                
            </section>
            
            <!--IMAGE GALLERY-->
            <div id="image-container">

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/1.png" alt="JPEGmafia performing live" class="image-individual">
                        
                </div>

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/2.png" alt="Vince Staples performing on stage" class="image-individual">
                        
                    
                </div>
                
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/3.png" alt="Rapper NoName performing live" class="image-individual">
                        
                </div>
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/4.png" alt="JPEGmafia interacting with a crowd during a show" class="image-individual">
                        
                </div>
        
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/5.png" alt="Childish Gambino giving a captivating performance during one of his shows" class="image-individual">
                        
                </div>
    
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/6.png" alt="A sound mixing desk" class="image-individual">
                        
                </div>
                
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/7.png" alt="A DJ performing live" class="image-individual">
                        
                </div>  
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/8.png" alt="Kevin Abstract of the band Brockhampton performing" class="image-individual">
                         
                </div>  
        
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/9.png" alt="Earl Sweatshirt in the middle of a live set during summer" class="image-individual">
                        
                </div>  
    
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/10.png" alt="Contemporary star THE WEEKND mid performance" class="image-individual">
                        
                </div>  

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/11.png" alt="Hip-Hop legend Ms. Lauryn Hill performing live" class="image-individual">
                        
                </div>
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/12.png" alt="A microphone pre-performance" class="image-individual">
                        
                </div>


            </div>
            
            
        </main>
        
        <!-- FOOTER -->
        <?php
            echo $footer;
        ?>
    <script src="../assets/jsScripts/lightmode.js"></script>
</body>
</html>