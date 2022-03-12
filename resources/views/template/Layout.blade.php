<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!--Designerd by: http://bootstrapthemes.co-->
    <head>
        <meta charset="utf-8">
        <title>La mejores noticias del rumbo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">
        <script type="text/javascript" src="http://cdn.howcode.org/content/static/javascript/jquery.min.js"></script>
		<script src="http://cdn.howcode.org/content/static/javascript/jquery.cookie.js"></script>

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/fonticons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootsnav.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="stylesheet" href="css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--generar traduccion-->
        <script type="text/javascript">
            $.cookie('googtrans', '/en/it');
            </script>
        <!--fin del mismo-->
        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        
                        <ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="badge">3</span>
                                </a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <a href="#" class="photo"><img src="images/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="photo"><img src="images/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="photo"><img src="images/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <!---- More List ---->
                                    <li class="total">
                                        <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                        <a href="#" class="btn btn-cart">Cart</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">

                            <img src="images/logo.png" class="logo logo-display m-top-10" alt="">
                            <img src="images/logo.jpg" class="logo logo-scrolled" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        traduccion: <div id="google_translate_element" style="display: none;"></div>
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="{{Route('jalar')}}">Internacionales</a></li>                    
                            <li><a href="{{Route('jalar2')}}">Locales</a></li>                    
                            <li><a href="{{Route('jalar3')}}">Deportes</a></li>                    
                            <li><a href="#portfolio">Portfolio</a></li>                    
                            <li><a href="#pricing">Pricing</a></li>                    
                            <li><a href="#blog">Blog</a></li>                    
                            <li><a href="#contact">Contact</a></li>  
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget">
                        <h6 class="title">Custom Pages</h6>
                        <ul class="link">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h6 class="title">Additional Links</h6>
                        <ul class="link">
                            <li><a href="#">Retina Homepage</a></li>
                            <li><a href="#">New Page Examples</a></li>
                            <li><a href="#">Parallax Sections</a></li>
                            <li><a href="#">Shortcode Central</a></li>
                            <li><a href="#">Ultimate Font Collection</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->

            </nav>


            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">Somos <br /> Las Noticias de Locura</h1>
                            </div>

                            <div class="home_btns m-top-40">
                                <a href="" class="btn btn-primary m-top-20">Comenzar</a>
                                <a href="" class="btn btn-default m-top-20">Ver ahora</a>
                            </div>

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            @yield('apis1')
                            @yield('apis2')
                            @yield('apis3')
                        
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
                <br />
                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
               

            <footer id="footer" class="footer bg-black">
                <div class="container">
                    <div class="row">
                        <div class="main_footer text-center p-top-40 p-bottom-30">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                Made with 
                                <i class="fa fa-heart"></i>
                                by 
                                <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> 
                                2016. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </footer>




        </div>

            <!-- JS includes -->

            <script src="js/vendor/jquery-1.11.2.min.js"></script>
            <script src="js/vendor/bootstrap.min.js"></script>

            <script src="js/jquery.magnific-popup.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/slick.min.js"></script>
            <script src="js/jquery.collapse.js"></script>
            <script src="js/bootsnav.js"></script>


            <!-- paradise slider js -->


            <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
            <script src="js/gmaps.min.js"></script>

            <script>
                            function showmap() {
                                var mapOptions = {
                                    zoom: 8,
                                    scrollwheel: false,
                                    center: new google.maps.LatLng(-34.397, 150.644),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                $('.mapheight').css('height', '350');
                                $('.maps_text h3').hide();
                            }

            </script>




            
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </body>
</html>
