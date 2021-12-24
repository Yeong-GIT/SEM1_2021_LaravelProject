<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>URND</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            
                            <li>
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li>
                    <x-app-layout>
                    </x-app-layout>
                    </li>
                        <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About URND</h6>
                            <h2>UNITEN R&D Sdn Bhd (URND)</h2>
                        </div>
                        <p>UNITEN R&D Sdn Bhd (URND), is a commercial arm of UNITEN. The main business operation is to
manage research and consultancy projects carried out by UNITEN academic staff. To increase
productivity in managing research and consultancy projects, a web-based system has been proposed. </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="col-4">
                            <img src="https://lh3.googleusercontent.com/oT1GI6bhArTheqGH3jvgmC9W0gpNYPcYMQ_COQsOlEc5Uw0wUivbSX5rpS6L6d1NJndlOFY3yixs9INU2A=s853" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="right-content">
                        <div class="thumb">

                        <img src="https://www.uniten.edu.my/media/1569/campus-putrajaya-01-main-entrance.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    


    

 

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>