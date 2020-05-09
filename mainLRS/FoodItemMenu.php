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
        <script type="text/javascript">
            $(function() {
                $("#accordion").accordion();
            });
        </script>

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
                <form class="ffooditem" action='itemcontroller.php' method='POST'>
                    <!-- menu-->
                    <section class="menu space60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header wow fadeInDown">
                                        <h1>Food Item List<small>These fine folks trusted the award winning restaurant.</small></h1>
                                    </div>
                                    <div class="ffooditem">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable> Food Name</lable>
                                                <input type="text" name="txtFoodName" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ffooditem">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>Food Price</lable>
                                                <input type="text" name="txtFoodPrice" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ffooditem">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>subcategory id</lable>
                                                <?php
                                                include'/Connection.php';
                                                $query3 = "select * from tbl_subcategory where subcategory_id=".$_GET['subcategory_id'];
                                                $result3 = mysqli_query($conn, $query3);
                                                if ($result3) {

                                                    $show3 = mysqli_fetch_assoc($result3);
                                                    echo("<input type='text' name='txtsid'  class='form-control' value='" . $show3['subcategory_id'] . "'/>");
                                                }
                                                ?>




                                            </div>
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


                                <?php
                                echo" <div  id='accordion' class='panel-group'>";
                                echo"<div class='panel panel-default'>";
        echo"<div class='panel-heading'>";
            echo"<h4 class='panel-title'>";
              //  echo"<a data-toggle='collapse' data-parent='#accordion' href= '#collapseOne'>";
                                /*include '/Connection.php';
                                $query = "select * from tbl_subcategory";
                                $result = mysqli_query($conn, $query);
                                if ($result) {

                                    $show = mysqli_fetch_assoc($result);*/
                                    echo" <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>$show3[subcategory_name]</a>";
                                
                                echo" </div>";
                                echo "<div>";
                                echo"<div class='panel panel-default'>";
        echo"<div class='panel-heading'>";
           echo" <h4 class='panel-title'>";
               echo" <a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>$show3[subcategory_name]</a>";
            echo"</h4>";
        echo"</div>";
        echo"</div>";
                                ?>
                                <?php
                                
                                echo" <div id='collapseOne' class='panel-collapse collapse in'>";
                                echo"<div class='panel-body'>";
                                $foodquery = "select * from tbl_food_item";
                                $foodresult = mysqli_query($conn, $foodquery);
                                if ($foodresult) {

                                    while ($show2 = mysqli_fetch_array($foodresult)) {
                                        echo"<div class='menu-item col-sm-6 col-xs-12 starter dinner desserts'>";
                                        echo"<div class='clearfix menu-wrapper'>";
                                        echo"<h4>" . $show2['food_name'] . "</h4>";
                                        echo"<span class='price'>$show2[food_price]</span>";
                                        echo" <div class='dotted-bg'></div>";
                                        echo "</div> </div>";
                                    }
                                }
                                ?>
                                <?php
                                      
                                
        echo"<div id='collapseTwo' class='panel-collapse collapse in'>";
            echo"<div class='panel-body'>";
            $foodquery2 = "select * from tbl_food_item where food_id=2";
                                $foodresult2 = mysqli_query($conn, $foodquery2);
                                if ($foodresult2) {

                                    while ($show5 = mysqli_fetch_array($foodresult2)) {
                                        echo"<div class='menu-item col-sm-6 col-xs-12 starter dinner desserts'>";
                                        echo"<div class='clearfix menu-wrapper'>";
                                        echo"<h4>" . $show5['food_name'] . "</h4>";
                                        echo"<span class='price'>$show5[food_price]</span>";
                                        echo" <div class='dotted-bg'></div>";
                                        echo "</div> </div>";
                                    }
                                }
                              
?>
         









                            </div>
                        </div>

                    </section>
                </form>

            </div> 
        </div>




        <!-- Footer-->
        <?php
        include '/include/includeFooter.php';
        ?>



        <!-- Javascript -->
        <?php
        include './include/includeJS.php';
        ?>
    </body>

</html>
