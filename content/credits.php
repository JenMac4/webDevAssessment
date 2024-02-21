<?php

    //CREATING PHP VARIABLES FOR USE THROUGHOUT PAGE
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    
    require_once 'function.php';

    // $sesionCheck = loginCheck();

    $navBar = navBarFunction();
    $banner = bannerFunction("credits", "");
    $footer = footerFunction();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>credits</title>
    <link rel="stylesheet" href="../assets/stylesheets/style.css">

</head>
<body>

<?php
    echo $navBar;
    echo $banner;
?>

<div class="credits-container">


<!-- image credits -->
        <div id="image-container">

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/1.png" alt="JPEGmafia performing live" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/w/index.php?curid=82282216" class="attribution-link">"JPEGMAFIA performing live"</a> by Levi Manchak. Licensed under CC 2.0.</p>
                        </div>
                </div>

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/2.png" alt="Vince Staples performing on stage" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/w/index.php?curid=74032720" class="attribution-link">"Vince Staples - First Avenue"</a> by Andy Witchger. Licensed under CC 2.0.</p>
                        </div>
                    
                </div>
                
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/3.png" alt="Rapper NoName performing live" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/w/index.php?curid=57124306" class="attribution-link">"Noname (Rapper) 2017"</a> by Candace Nyaomi. Licensed under CC 2.0.</p>
                        </div>
                </div>
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/4.png" alt="JPEGmafia interacting with a crowd during a show" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/94031922@N06/32552756667" class="attribution-link">"JPEGMAFIA at Treefort Music Festival"</a> by PeterLovera _Treefort2019-. Licensed under CC 2.0. </p>
                        </div>
                </div>
        
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/5.png" alt="Childish Gambino giving a captivating performance during one of his shows" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/32999928@N05/7213669266" class="attribution-link">"Childish Gambino"</a> by Eli Watson. Licensed under CC 2.0.</p>
                        </div>
                </div>
    
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/6.png" alt="A sound mixing desk" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/38174668@N05/4285839237" class="attribution-link">"The New ICON Dual-Operator System Offers Students the Most Up-to-date Features in Sound Design"</a> by vancouverfilmschool. Licensed under CC 2.0.</p>
                        </div>
                </div>
                
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/7.png" alt="A DJ performing live" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/35034361412@N01/303295657" class="attribution-link">"DJ Smoovebert on the Decks"</a> by Rick. Licensed under CC 2.0.</p>
                        </div>
                </div>  
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/8.png" alt="Kevin Abstract of the band Brockhampton performing" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/w/index.php?curid=77366690" class="attribution-link">"Borckhampton July 2018"</a> by Nicolas Padovani. Licensed under CC 2.0.</p>
                        </div> 
                </div>  
        
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/9.png" alt="Earl Sweatshirt in the middle of a live set during summer" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/w/index.php?curid=70798349" class="attribution-link">"Earl Sweatshirt Day N Night Festival"</a> by Frank Morales. Licensed under CC 2.0.</p>
                        </div>
                </div>  
    
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/10.png" alt="Contemporary star THE WEEKND mid performance" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://commons.wikimedia.org/wiki/File:FEQ_July_2018_The_Weeknd_(44778856382).jpg" class="attribution-link">"The Weeknd performing in July 2018"</a> by Nicolas Padovani. Licensed under CC 2.0.</p>

                        </div>
                </div>  

                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/11.png" alt="Hip-Hop legend Ms. Lauryn Hill performing live" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/39400957@N03/49311869387" class="attribution-link">"Ms. Lauryn Hill @ The Mayan 10/18/2019"</a> by Justin Higuchi. Licensed under CC 2.0.</p>
                        </div>
                </div>
            
                <div class="image-container">
                    <img src="../assets/images/rapHouseHomeImages/12.png" alt="A microphone pre-performance" class="image-individual">
                        <div class="img-attribute">
                            <p><a href="https://www.flickr.com/photos/64654599@N00/2217562952" class="attribution-link">"Microphone"</a> by
                            Paul. Licensed under CC 2.0.</p>
                        
                        </div>
                </div>


            </div>


            <img src="loginPageBackground.jpg" alt="Rap for Humanity event">
            <a href="https://openverse.org/image/5a879633-c03b-43f2-b18d-0410c6d17929?q=rap%20wordsmith">"Rap for Humanity - Celebrating the Legacy of Daniel Pearl" by U.S. Embassy Jerusalem is licensed under CC BY 2.0.</a>
            
            <!-- YOUTUBE VIDEOS -->
            <h3>videos that helped with code</h3>
            
            <h5>no code was copied from any of these videos but they did assist with certain issues that arose along the way</h5>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/RTbAzI1iI_A?si=daytL36ycYQ_SQNf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/c5suYEgOsPs?si=A2n_Mh_MZrXSydTN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/6BfofgkrI3Y?si=rlhcUmka8In6csZ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/D4XHxALuLzs?si=4p7NM40Fz22VEkop" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/wodWDIdV9BY?si=vP-7Rv9O3BkFIvyt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/72U5Af8KUpA?si=NGM-o4gUFvD5doIT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/j-rQiXYJsH0?si=H444d5dyhAh387jQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <a href="https://www.youtube.com/watch?v=vJNVramny9k&t=929s">SVG Animation With Text Tutorial | HTML CSS by developedbyed.</a>
            
            <!-- STACKOVERFLOW CREDITS -->
            <h3>stack overflow articles that assisted with issues</h3>
            
            <a href="https://stackoverflow.com/questions/2480186/change-date-format-in-db-or-output-to-dd-mm-yyyy-php-mysql">Change date format (in DB or output) to dd/mm/yyyy - PHP MySQL</a>
            
            <a href="https://stackoverflow.com/questions/24875414/addeventlistener-change-and-option-selection">addEventListener, "change" and option selection</a>
            
            <a href="https://stackoverflow.com/questions/31507031/php-store-session-variable-in-mysql-database">php store session variable in mysql database</a>
            <a href="https://stackoverflow.com/questions/6417816/php-var-dump-session">PHP var_dump($_SESSION);</a>
            <a href="https://www.wufoo.com/html5/readonly-attribute/#:~:text=The%20readonly%20attribute%20makes%20a,it%2C%20and%20copy%20its%20contents.">readonly attribute</a>
            <a href="https://stackoverflow.com/questions/16875441/fetching-data-from-a-mysql-table-using-a-while-loop-in-php">Fetching data from a MySQL table using a while loop in PHP [closed]</a>
            <a href="https://stackoverflow.com/questions/2216052/how-to-check-whether-an-array-is-empty-using-php">How to check whether an array is empty using PHP?</a>
            <a href="https://stackoverflow.com/questions/11873990/create-preg-match-for-password-validation-allowing">Using preg_match for password validation</a>

</div>

<script src="../assets/jsScripts/lightmode.js"></script>

    
</body>
<?php
    echo $footer;
?>
</html>