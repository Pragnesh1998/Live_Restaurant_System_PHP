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
            <?php
            if (isset($_SESSION['msg'])) {
            
echo $_SESSION['msg'];
            
unset($_SESSION['msg']);
        }
        
?>

            <div class="main-wrapper">
                <!-- Navigation-->
                <?php
                include './include/includeNavigation.php';
                ?>

                <!-- Page Header -->
                <?php
                include './include/includePageHeader.php';
                ?>


                <!-- Account Content -->
                <section class="shop-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row shop-login">

                                    <div class="col-md-6">
                                        <div class="box-content">
                                            <form class="fregform" action='RegistrationController.php' method='POST' enctype='multipart/form-data'>
                                                <h3 class="text-center">Register An Account</h3>
                                                <br>


                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>First Name</label>
                                                            <input type="text"  name='txtFname' value="" class="form-control">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label>Last Name</label>
                                                            <input type="text" name='txtLname' value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>date of birth</label>
                                                            <input type="date"  name='dbday' value="" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Phone Number</label>
                                                            <input type="text"  name='txtphone'value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">


                                                        <div class="col-md-12">
                                                            <label>Gender</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            Male<input type="radio" name='rbtngender' value='Male'>
                                                            Female<input type="radio" name='rbtngender' value='Female'>
                                                        </div>

                                                    </div>
                                                </div>


                                                <br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>E-mail Address</label>
                                                            <input type="text" name='txtemail'value="" class="form-control">
                                                        </div>


                                                        <div class="col-md-12">
                                                            <label>User Name</label>
                                                            <input type="text"name='txtusername' value="" class="form-control">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="clearfix space20">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Password</label>
                                                            <input type="password" name='psd'value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>User Type</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select name="drdusert" value="drdusert" class="form-control">
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "lrsregistration");
                                                                if (!$conn) {
                                                                    echo "not connect" . mysqli_connect_errno();
                                                                }
                                                                $query = "select * from tbl_user_type where user_type_id!=1";
                                                                $result = mysqli_query($conn, $query);
                                                                if ($result) {
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                        echo"<option value='" . $row['user_type_id'] . "'>$row[user_type_name]</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Uploade User's  Photo</label>
                                                            <input type='file' name='FlUserPhoto' class='form-control'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="space20"></div>
                                                        <button button type="submit" class="btn btn-default btn-block">Register</button>
                                                    </div>
                                                </div>
                                        
                                            </form>

                                        </div>
                                         
                                    </div>
                                














                                    <div class="col-md-6">
                                        <div class="box-content">
                                            <h3 class="text-center">Existing Customer</h3>
                                            <br>
                                            <form name="flogin" action="LoginController.php" method="POST">

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Username</label>
                                                            <input type="text" name='txtusername' value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <a class="pull-right" href="./index.html">(Lost Password?)</a>
                                                            <br>
                                                            <label>Password</label>
                                                            <input type="password"name="psd" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <span class="remember-box checkbox">
                                                            <label for="rememberme">
                                                                <input type="checkbox" id="rememberme" name="rememberme">Remember Me

                                                            </label>

                                                        </span>
                                                    </div>
                                                    <div class="col-md-12"><br>
                                                        <button type="submit" class="btn btn-default btn-block">Login</button>
                                                    </div>
                                                </div>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </section>
            </div>
        </div>

        <


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
