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

                <form class="fcategory" action='subcategorycontroller.php' method='POST'>

                    <section class="menu menu2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header wow fadeInDown">

                                        <h1>SubCategory<small>These fine folks trusted the award winning restaurant.</small></h1>

                                    </div>
                                </div>
                                <div class="formcategory">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <lable>Category id</lable>
                                            <?php
                                            include '/Connection.php';
                                            $query1 = "select * from tbl_category where category_id = " . $_GET['category_id'];
                                            $result1 = mysqli_query($conn, $query1);
                                            if ($result1) {
                                                $show = mysqli_fetch_assoc($result1);
                                                echo ("<input type = 'text' name = 'txtCategoryId' class = 'form-control' value ='" . $show['category_id'] . "' />");
                                                echo "<div class='fsubcategory'>";
                                                echo"<div class='row'>";
                                                echo" <div class='col-md-3'>";

                                                echo"<lable>Category_name</lable>";
                                                // $query = "SELECT category_id  from tbl_subcategory sb LEFT JOIN tbl_category c ON c.category_id=sb.category_id ";
                                                echo("<input type='text' name='txtCategoryName' class='form-control' value='" . $show['category_name'] . "'/>");
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <lable>Subcategory Name</lable>
                                        <input type="text" name="txtsname" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="space20"></div>
                                        <button button type="submit" class="btn btn-default btn-block">submit</button>
                                    </div>
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
                            <?php
                            include'/Connection.php';
                            $query = "select * from tbl_subcategory where category_id=".$_GET['category_id'];
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                echo"<div class='row menu-items2'>";
                                while ($show1 = mysqli_fetch_array($result)) {

                                    echo"<div class='menu-item2 col-sm-4 col-xs-12 starter dinner desserts'>";
                                    echo" <div class='menu-info'>";
                                    echo" <img src='img/menu/1/1.jpg' class='img-responsive' alt='' />";
                                    echo"<a href='FoodItemMenu.php'>";
                                    echo"<div class='menu2-overlay'>";
                                    echo" <h4>" . $show1['subcategory_id'] . " <br>" . $show1['subcategory_name'] . "</h4>";
                                    //<p>Asparagus, hens egg, toasted
                                    //<br>sunflower seeds, Spenwood cheese</p>
                                    // <span class="price">$ 14.95</span>
                                    echo" </div>";
                                    echo"</a>";
                                    echo"</div>";
                                    echo" <a href='/FoodItemMenu.php?subcategory_id=" . $show1['subcategory_id'] . "' class='menu-more'>+</a>";
                                    echo"</div>";
                                }
                            }
                                echo"</div>";
                            
                            ?>
                        </div>
                    </section>
                </form>
            </div> 
        </div>


        <!-- Footer-->
        <?php
        include './include/includeFooter.php';
        ?>


        <!-- Javascript -->
        <?php
        include './include/includeJS.php';
        ?>
    </body>

</html>
