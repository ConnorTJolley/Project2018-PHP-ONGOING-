<?php

//Checks if the user is logged in or not
include '../statuses/checkloggedinstatus.php';

CheckLoggedIn();

if(isset($_SESSION["EmailSuccess"]))
{
  if($_SESSION["EmailSuccess"]=="True")
  {
    print_r("Email sent successfully");
    $_SESSION["EmailSuccess"] = "";
  }
  else if($_SESSION["EmailSuccess"]=="False")
  {
    print_r("Something went wrong when attempting to send Email!");
  }
  else if($_SESSION["EmailSuccess"]=="")
  {
    //Don't do anything
  }
}

?>
<!--Start of HTML-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boiler Control &middot; Project</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../../assets/font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="../../assets/css/hero-slider-style.css">                                  <!-- Hero slider style -->
    <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
      <center>
       <nav>
          <ul>
            <a href="../../index.php"><button class="cd-btn">Home</button></a>
            <a href="about.php"><button class="cd-btn">About Us</button></a>
            <a href="../management/accountmanage.php"><button class="cd-btn">Manage Account</button></a>
            <a href="../datahandling/contactpage.php"><button class="cd-btn">Contact Us</button></a>
            <a href="../statuses/logout.php"><button class="cd-btn">Logout</button></a>
          </ul>
        </nav>
      </center>
        <section class="cd-hero">
            <ul class="cd-hero-slider autoplay">  
            <!-- 
            	<ul class="cd-hero-slider autoplay"> for slider auto play -->
                <ul class="cd-hero-slider">
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="tm-slide-content-div">
                                <!--can put company logo here-->
                                <h2 class="text-uppercase">About us</h2>
                                </br>
                                <p class="m-b-mid">
                                  This project / system was created in hopes to enable users to quickly and easily control 
                                  their boiler from their mobile device from anywhere with a wifi / data connection.
                                  </br></br>
                                  We aimed to make the system as easy and understandable as possible, ensuring that the fastest available 
                                  network connection isn't required in order to quickly and efficiently use the services 
                                </p>  
                        </div>                        
                    </div> <!-- .cd-full-width -->
                </li>
            </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->
          
        <!-- load JS files -->
        <script src="assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="assets/js/hero-slider-script.js"></script>            <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="assets/js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        <script>     
       
            $(document).ready(function(){

                /* Auto play bootstrap carousel 
                * http://stackoverflow.com/questions/13525258/twitter-bootstrap-carousel-autoplay-on-load
                -----------------------------------------------------------------------------------------*/                
                $('.carousel').carousel({
                  interval: 3000
                })

                /* Enable swiping carousel for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });                             
            });

        </script>             

</body>
</html>
<!--End of HTML-->