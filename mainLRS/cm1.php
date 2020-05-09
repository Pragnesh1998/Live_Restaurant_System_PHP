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
        <script>
            function updaterow(cid) {
                window.location.href = "updatecategory.php?category_id=" + cid;
            }</script>
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

                <form class="fcategory" action='categorycontroller.php' method='POST'>

                    <section class="menu menu2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header wow fadeInDown">

                                        <h1>Category<small>These fine folks trusted the award winning restaurant.</small></h1>

                                    </div>
                                </div>
                                <div class="formcategory">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <lable>Category id</lable>
                                            <input type="text" name="txtCategoryId" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="formcategory">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <lable>Category Name</lable>
                                            <input type="text" name="txtCategoryName" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="space20"></div>
                                            <button button type="submit" class="btn btn-default btn-block">submit</button>
                                    
                                        </div>
                                    </div>
                                    <div>
                                         <script>
            function updaterow(cid) {
                window.location.href = "updatecategory.php?category_id=" + cid;
            }</script>
    </head>
<body>
    <table border="1px">
        <th>category id</th>
        <th>category name</th>
        <th>Action</th>
        <?php
        include '\Connection.php';
        $query = "select * from tbl_category where category_id=category_id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr> <td>" . $row['category_id'] . "</td>"
                . "<td>" . $row['category_name'] . "</td>"
                . "<td><input type='button' onclick='updaterow($row[category_id])' value='update'/></td></tr>";
            }
        }
        ?>
    </table>
                                    
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
                                $query = "select * from tbl_category";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    echo"<div class='row menu-items2'>";
                                    while ($show = mysqli_fetch_array($result)) {

                                        echo"<div class='menu-item2 col-sm-4 col-xs-12 starter dinner desserts'>";
                                        echo" <div class='menu-info'>";
                                        echo" <img src='img/menu/1/1.jpg' class='img-responsive' alt='' />";
                                        echo"<a href='subcategory.php'>";
                                        echo"<div class='menu2-overlay'>";
                                        echo" <h4>" . $show['category_id'] . " <br>" . $show['category_name'] . "</h4>";
                                        //<p>Asparagus, hens egg, toasted
                                        //<br>sunflower seeds, Spenwood cheese</p>
                                        // <span class="price">$ 14.95</span>
                                        echo" </div>";
                                        echo"</a>";
                                        echo"</div>";
                                        echo" <a href='/subcategory.php?category_id=".$show['category_id']. "' class='menu-more'>+</a>";
                                        echo"</div>";
                                    }
                                    echo"</div>";
                                }
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
