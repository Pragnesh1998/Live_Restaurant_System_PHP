   <head>
        <style>
            img{
                height:90px;
               width:90px;
            }
        </style>
    </head>
 
<?php

session_start();
echo "hello ";
echo $_SESSION['first_name'];
include './Connection.php';


if(!$conn){
    mysqli_connect_errno();
}
 else {

$query="select * from tbl_register where registration_id=".$_SESSION['registration_id'];
                $result=mysqli_query($conn,$query);
                if($result){
                   $row=  mysqli_fetch_assoc($result);
                   echo"<div>";
                          echo"<img src='$row[Users_photo]' class='img-responsive' alt='' />";
                echo"</div>";
                          
                }
}
?>
    <html>
        <body>
    <div class = "row">
<div class = "col-md-6">
<div class = "space20"></div>
<a href="updateRegistration.php" class = "btn btn-default btn-block">Update Profile</a>
</div>
    </div>
        </body>
            
    </html>
