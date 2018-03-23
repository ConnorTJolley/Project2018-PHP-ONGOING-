<?php

//Checks if the user is logged in or not
include 'resources/statuses/checkloggedinstatus.php';

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
    <link rel="stylesheet" href="assets/font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="assets/css/hero-slider-style.css">                                  <!-- Hero slider style -->
    <link rel="stylesheet" href="assets/css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <!-- Contact section -->
        <section class="tm-bg-purple tm-section">
            <div class="container-fluid tm-section-5-inner">
                <div class="row">
                    <div class="col-xs-12 tm-text-white text-xs-center">
                        <h2 class="tm-section-3-title">Welcome to Wireless Boiler Control</h2>
                        <p class="tm-section-3-description">
                          If you already have an account with us, please login using the form below, if you don't 
                          currently have an account, you can register by clicking the Register button!
                        </p>
                    </div>
                </div>
                <center>
                  <div class="row">
                  <center>
                    <form action="resources/datahandling/contactemail.php" method="POST" class="tm-contact-form">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <center>
                              <div class="form-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required/>
                              </div>
                            </center>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="********" required/>
                            </div>   
                        </div>

                        <div class="col-xs-12">
                            <button type="submit" name="submit" class="cd-btn pull-xs-left">Login</button>
                          </form>
                            
                        </div>
                        <a href="register.php"><button class="cd-btn2 pull-xs-left">Register</button></a>
                   </center>     
                  </br></br></br></br>
                  
                </div>
                </center>
                <div class="row">
                    <footer class="col-xs-12 text-xs-center">
                        <p class="tm-text-white tm-copyright-text">Copyright &copy; 2018 Connor Jolley 
                    </footer>
                </div>
            </div>
        </section>

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