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
                                <form name="fitem" action="updateitemcontroller.php" method="POST">
                                <h2 class="text-uppercase">Menu</h2>
                                <p>Tomato is a delicious restaurant website template</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- menu-->
                <section class="menu menu2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="box-content">
                                  
                                        <h1>Food Item</h1>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>Food Id</lable>
                                                                        <?php
                        include '\Connection.php';
                        if (!$conn) {
                            echo "not connect" . mysqli_connect_errno();
                        } else {
                            $query = "SELECT * from tbl_food_item where food_id=" . $_GET['food_id'];
                            $result = mysqli_query($conn, $query);
                            $row=  mysqli_fetch_array($result);
                        }
                        echo "<input type='text' name='txtfid'  class='form-control' value='$row[food_id]'/>";
                        ?>
                                    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>Food Name</lable>
                                                
                                                <input type="text"  name="txtfoodname" class="form-control"value="<?php echo $row['food_name'];?>">
                                      
          
                                            
                                                <input type="text"  name="txtfoodname" class="form-control">
                                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>Food Price</lable>
                                                <input type="text"  name="txtfoodprice" class="form-control" value="<?php echo $row['food_price'];?>">
                                                <input type="text" name="txtfoodprice" class="form-comntrol">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <lable>subcatyegory</lable>
                                                <select name="drdsname" value="drdsname" class="form-control">
                                                    <?php
                                                    include '\Connection.php';
                                                    $query = "select * from  tbl_subcategory";
                                                    $result = mysqli_query($conn, $query);
                                                    if ($result) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo"<option value='" . $row['subcategory_id'] . "'>$row[subcategory_name]</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <br>
                                            </div>
                                            <div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="space20"></div>
                                                    <button button type="submit" class="btn btn-default btn-block">Submit</button>
                                                </div>
                                            </div>
                                           
                                    </div>
                                        
                                   </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>                
            </div>



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
