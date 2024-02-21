<?php


    // session_start();



    //FUNCTION FOR CONNECTING TO DB

    //XAMPP function
    function getConnected(){
        $conn=mysqli_connect('localhost', 'root', '', 'RapHouse');

        return $conn;
    }

    // nuwebspace CONNECTION
    // function getConnected(){
    //     $conn=mysqli_connect('nuwebspace_db', 'w23039046', 'Granite123', 'w23039046');

    //     return $conn;
    // }

    function loginCheck(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }


    //FUNCTION FOR LOADING BG IMAGE
    function backgroundImage(){
        $backgroundContent='
        <main id="full-login-page">
        <div class="login-container">
            
            

        </div>
    </main>';

    return $backgroundContent;

    }

    //FUNCTION FOR SANITISING DATA
    function securityChecksString($string){
        $string = filter_var($string, FILTER_SANITIZE_STRING);
        $string = htmlspecialchars($string);

        return $string;

    }


    //FUNCTION FOR LOADING NAV BAR
    //CHECK IF USER IS LOGGED IN TO DETERMINE WHAT OPTIONS THEY HAVE
    function navBarFunction(){

    if(isset($_SESSION['logged-in'])){
        $navBarContent="
        <div id='lightmode'>
            <div class='switch'>
                <div class='switchLatch'></div>
            </div>
        </div>
        <!-- <div class='lightmode-text'>light mode</div> -->
    
    
        <nav>
            <ul id='nav-bar'>
                <li class='menu-item'><a href='index.php' accesskey='h'>HOME</a></li>
                <li class='menu-item'><a href='gigListings.php' accesskey='g'>LIVE SHOWS</a></li>
                <li class='menu-item'><a href='myEvents.php' accesskey='b'>BOOKINGS</a></li>
                <li class='menu-item'><a href='credits.php' accesskey='c'>CREDITS</a></li>
                <li class='menu-item'><a href='signOut.php' accesskey='w'>SIGN OUT</a></li>
                </ul>
                </nav>
                ";
                
                return $navBarContent;
                
            }
            else {
                $navBarContent="
                <div id='lightmode'>
                <div class='switch'>
                <div class='switchLatch'></div>
                </div>
                </div>
                <!-- <div class='lightmode-text'>light mode</div> -->
                
                
                <nav>
                <ul id='nav-bar'>
                <li class='menu-item'><a href='index.php' accesskey='h'>HOME</a></li>
                <li class='menu-item'><a href='gigListings.php' accesskey='g'>LIVE SHOWS</a></li>
                <li class='menu-item'><a href='credits.php' accesskey='c'>CREDITS</a></li>
                    <li class='menu-item'><a href='login.php' accesskey='w'>SIGN IN</a></li>
                </ul>
            </nav>
        ";
        
                return $navBarContent;

    }
    }
    function navBarNoSwitch(){

    if(isset($_SESSION['logged-in'])){
        $navBarContent="
        
    
    
        <nav>
            <ul id='nav-bar'>
                <li class='menu-item'><a href='index.php' accesskey='h'>HOME</a></li>
                <li class='menu-item'><a href='gigListings.php' accesskey='g'>LIVE SHOWS</a></li>
                <li class='menu-item'><a href='myEvents.php' accesskey='b'>BOOKINGS</a></li>
                <li class='menu-item'><a href='credits.php' accesskey='c'>CREDITS</a></li>
                <li class='menu-item'><a href='signOut.php' accesskey='w'>SIGN OUT</a></li>
                </ul>
                </nav>
                ";
                
                return $navBarContent;
                
            }
            else {
                $navBarContent="
                
                
                
                <nav>
                <ul id='nav-bar'>
                <li class='menu-item'><a href='index.php' accesskey='h'>HOME</a></li>
                <li class='menu-item'><a href='gigListings.php' accesskey='g'>LIVE SHOWS</a></li>
                <li class='menu-item'><a href='credits.php' accesskey='c'>CREDITS</a></li>
                    <li class='menu-item'><a href='login.php' accesskey='w'>SIGN IN</a></li>
                </ul>
            </nav>
        ";
        
                return $navBarContent;

    }
    }



    //FUNCTION FOR LOADING THE HEADER BANNER
    function bannerFunction(string $mainBannerHeader, string $secondaryBannerHeader){

        $bannerContent = "
        <div id='banner'>
        <h1 id='banner-text-main'>$mainBannerHeader</h1>
        
        <h3 class='banner-text-sub'>$secondaryBannerHeader</h3>
    </div>
        ";

        return $bannerContent;
    }

    //FUNCTION FOR LOADING THE FOOTER
    function footerFunction(){

        $footerContent="
         <footer class='footer'>
             <div class='footer-portion-1'>
                    <h3 class='footer-logo'>the rap<br>house.</h3>
             </div>
        
                <div class='footer-portion-2'>
                    <h3>contact us.</h3>
                    <p>07135 431111</p>
                    <p>raphouse@fakenews.com</p>
                </div>
    
        </footer>";

        return $footerContent;
    }

?>