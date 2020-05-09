<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tomato Responsive Restaurant HTML5 Template</title>
    <meta name="author" content="Surjith S M">

    <!-- SEO -->
    <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

   <?php
   include './include/includeCss.php';
   ?>
    <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>

<body>
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

        <div class="main-wrapper">
            <!-- Navigation-->
            <?php
                include './include/includeNavigation.php';
            ?>

            <!-- Page Header -->
            <section class="page_header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-uppercase">Menu</h2>
                            <p>Tomato is a delicious restaurant website template</p>
                        </div>
                    </div>
                </div>
            </section>

          
            
            <section class="menu menu2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Category<small>These fine folks trusted the award winning restaurant.</small></h1>
                            </div>
                            <div class="formcategory">
                                <div class="row">
                                    <div class="col-md-6">
                                        <lable>Category id</lable>
                                        <input type="text" name="txtcid" value="" class="form-control">
                                    </div>
                        </div>
                    </div>
                    <div class="food-menu wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-tags2">
                                    <span data-filter="*" class="tagsort2-active">All</span>
                                    <span data-filter=".starter">starters</span>
                                    <span data-filter=".breakfast">breakfast</span>
                                    <span data-filter=".lunch">lunch</span>
                                    <span data-filter=".dinner">dinner</span>
                                    <span data-filter=".desserts">desserts</span>
                                </div>
                            </div>
                        </div>
                        <div class="row menu-items2">
                            <div class="menu-item2 col-sm-4 col-xs-12 starter dinner desserts">
                                <div class="menu-info">
                                    <img src="img/menu/1/1.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                            <div class="menu-item2 col-sm-4 col-xs-12 starter">
                                <div class="menu-info">
                                    <img src="img/menu/1/2.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                            <div class="menu-item2 col-sm-4 col-xs-12 breakfast desserts starter">
                                <div class="menu-info">
                                    <img src="img/menu/1/3.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                            <div class="menu-item2 col-sm-4 col-xs-12 breakfast">
                                <div class="menu-info">
                                    <img src="img/menu/1/4.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                            <div class="menu-item2 col-sm-4 col-xs-12 lunch starter breakfast">
                                <div class="menu-info">
                                    <img src="img/menu/1/5.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                            <div class="menu-item2 col-sm-4 col-xs-12 lunch">
                                <div class="menu-info">
                                    <img src="img/menu/1/6.jpg" class="img-responsive" alt="" />
                                    <a href="./menu_all.html">
                                        <div class="menu2-overlay">
                                            <h4>English-Asparagus</h4>
                                            <p>Asparagus, hens egg, toasted
                                                <br>sunflower seeds, Spenwood cheese</p>
                                            <span class="price">$ 14.95</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="./menu_all.html" class="menu-more">+</a>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Javascript -->
   <?php
include './include/includeJS.php';
   ?>
</body>

</html>
