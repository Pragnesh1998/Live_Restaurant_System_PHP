<!DOCTYPE html>
<html lang="en">

<?php
include './include/includeCss.php';
?>

<body id="intro3">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Preloder-->
    <div class="preloder animated">
        <div class="scoket">
            <img src="img/preloader.svg" alt="" />
        </div>
    </div>

    <div class="body">

        <!-- Navigation-->
        <?php
        include './include/includeHeader.php';
        ?>

        <!-- Home page-->
        <section class="home">
            <div class="overlay"></div>

            <div class="tittle-block">
                <div class="logo">
                    <a href="./index.html">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <h1>DELICIOUS Food</h1>
                <h2>Tomato is a delitious restaurant website template</h2>
            </div>
            <div class="scroll-down">
                <a href="#about">
                    <img src="img/arrow-down.png" alt="down-arrow">
                </a>
            </div>
        </section>

        <div class="main-wrapper">
            <!-- About page-->
            <section class="about" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>the restaurant<small>A little about us and a breif history of how we started.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 hidden-sm about-photo">
                                        <div class="image-thumb">
                                            <img src="img/thumb1.png" data-mfp-src="img/fullImages/pic1.jpg" class="img-responsive" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/thumb2.png" data-mfp-src="img/fullImages/pic2.jpg" class="img-responsive" alt="logo">
                                    </div>
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/thumb3.png" data-mfp-src="img/fullImages/pic3.jpg" class="img-responsive" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p>
                                Cras ut viverra eros. Phasellus sollicitudin sapien id luctus tempor. Sed hendrerit interdum sagittis. Donec nunc lacus, dapibus nec interdum eget, ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi. Etiam interdum ligula purus, placerat aliquam odio faucibus a. Pellentesque et pulvinar lectus. Fusce scelerisque nisi id nisl gravida ultricies.
                            </p>
                            <br>
                            <p>
                                Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi.
                            </p>
                            <img src="img/signature.png" alt="signature">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Today's special page-->
            <section class="special">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">today's specials<small>A little about us and a breif history of how we started.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="flexslider special-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="direction-nav hidden-sm">
                                    <div class="next">
                                        <a><img src="img/right-arrow.png" alt="" /></a>
                                    </div>
                                    <div class="prev">
                                        <a><img src="img/left-arrow.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reservations page-->
            <section class="reservation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Reservations<small>Book a table online. Leads will reach in your email.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="reservation-form wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control" id="datepicker" placeholder="Pick a date">
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="text" class="form-control" id="timepicker" placeholder="Pick a time">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Your Email ID">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Guests</label>
                                    <input class="form-control" type="number" placeholder="How many of you?">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter your Phone Number">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="reservation-btn">
                                    <a class="btn btn-default btn-lg" role="button">Make Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reservation-footer">
                        <p>You can also call: <strong>+1 224 6787 004</strong> to make a reservation.</p>
                        <span></span>
                    </div>
                </div>
            </section>

            <!-- Our features-->
            <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">Our features<small>Little things make us best in town</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb5.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb6.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb7.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 visible-sm">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb5.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- menu-->
            <section class="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Our menu<small>These fine folks trusted the award winning restaurant.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-tags">
                                    <span data-filter="*" class="tagsort-active">All</span>
                                    <span data-filter=".starter">starters</span>
                                    <span data-filter=".breakfast">breakfast</span>
                                    <span data-filter=".lunch">lunch</span>
                                    <span data-filter=".dinner">dinner</span>
                                    <span data-filter=".desserts">desserts</span>
                                </div>
                            </div>
                        </div>
                        <div class="row menu-items">
                            <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 breakfast desserts starter">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 lunch starter breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 lunch">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 dinner breakfast lunch">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 dinner">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 desserts lunch dinner">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 desserts">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-btn">
                                    <a class="btn btn-default btn-lg" href="./menu_all.html" role="button">Explore our menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trusted BY-->
            <section class="trusted">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Trusted By<small>These fine folks trusted tha award winning restaurant</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-12">
                            <div class="trusted-sponsors">
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/foodsquare.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/opentable.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/tripadvisor.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/zomato.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/foodsquare.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/opentable.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/tripadvisor.png" alt="sponsors">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="./index.html">
                                        <img src="img/sponsor/zomato.png" alt="sponsors">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quotes section-->
                <div class="trusted-quote">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="trusted-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">The world’s a big, big stage for this notorious deli smack in the middle of the theatre district, infamously famous for its over-the-top corned beef and pastrami sandwiches, chopped liver, blintzes, celebrities, salami, smoked fish and New York’s finest cheesecake.</p>
                                            <p class="quote-author">Anthony Reed, <span>New York</span></p>
                                        </li>
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">You might not find dragon meat on the menu, but you’ll find pretty much anything else that walks, swims or flies, cooked up in more ways than there are people in the Guangdong province. This Midtown mainstay has a 20-year history of delivering mouth-watering and Cantonese style chow.</p>
                                            <p class="quote-author">Gemma Arterton, <span>Bay Area</span></p>
                                        </li>
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">This NYC historical landmark in the heart of the Theatre District has been serving up suds and down home pub food since 1892, surviving prohibition by renting the front of its then Rockefeller Center façade to Greek florists, while the Hurley brothers ran a speak-easy in back.</p>
                                            <p class="quote-author">Zachary Burton, <span>Sanfransisco</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="instagram">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Instagram<small>We love posting photos of our coustomers having a good time</small></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- instafeed div-->
                <!-- Change your settings in the data- attributes (See documentation for help) -->
                <div id="instafeed" data-username="YOUR_INSTAGRAM_USERNAME_HERE" data-access-token="YOUR_INSTAGRAM_ACCESS_TOKEN_HERE" data-client-id="YOUR_INSTAGRAM_CLIENT_ID_HERE">
            </section>

            <!-- subscribe -->
            <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Subscribe</h1>
                            <p>Get updates about new dishes and upcoming events</p>
                            <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                                <div class="form-group">
                                    <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer-->
            <?php
              include './include/includeFooter.php';
            ?>
            
            </div>

        </div>

        <!-- STYLE SWITCHER 
============================================= -->
        <div class="b-settings-panel">
            <div class="settings-section">
                <span>
        Boxed 
        </span>
                <div class="b-switch">
                    <div class="switch-handle"></div>
                </div>
                <span>
        Wide 
        </span>
            </div>
            <hr class="dashed" style="margin: 15px 0px;">
            <h5>Main Background</h5>
            <div class="settings-section bg-list">
                <div class="bg-wood_pattern"></div>
                <div class="bg-shattered"></div>
                <div class="bg-vichy"></div>
                <div class="bg-random-grey-variations"></div>
                <div class="bg-irongrip"></div>
                <div class="bg-gplaypattern"></div>
                <div class="bg-diamond_upholstery"></div>
                <div class="bg-denim"></div>
                <div class="bg-crissXcross"></div>
                <div class="bg-climpek"></div>
            </div>
            <hr class="dashed" style="margin: 15px 0px;">
            <h5>Color Scheme</h5>
            <div class="settings-section color-list">
                <div data-src="css/themes/blue.css" style="background: #45b5f5"></div>
                <div data-src="css/themes/brown.css" style="background: #dc8068"></div>
                <div data-src="css/themes/cyan.css" style="background: #00becc"></div>
                <div data-src="css/themes/green.css" style="background: #5bb75b"></div>
                <div data-src="css/themes/orange.css" style="background: #ff7149"></div>
                <div data-src="css/themes/pink.css" style="background: #fba1a1"></div>
                <div data-src="css/themes/red.css" style="background: #dc3522"></div>
                <div data-src="css/themes/yellow.css" style="background: #fdb813"></div>
            </div>

            <a data-src="css/style.css" class="reset"><span class="bg-wood_pattern">Reset</span></a>

            <div class="btn-settings"></div>
        </div>
        <!-- END STYLE SWITCHER 
============================================= -->

        <!-- Javascript -->
       <?php
       include './include/includeJS.php';
       
       ?>
</body>

</html>
