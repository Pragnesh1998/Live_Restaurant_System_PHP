<?php
include '\Connection.php';
$fid=$_POST['txtfid'];
$fname=$_POST['txtfoodname'];
$fprice=$_POST['txtfoodprice'];
$sname=$_POST['drdsname'];
$query="update tbl_food_item SET `food_name`='$fname', `food_price`='$fprice', `subcategory_id`='$sname' WHERE `food_id`='$fid'";

echo $query;
$result=mysqli_query($conn,$query);
if($result)
{
    echo "update record";
    
}
    else
    {
        echo "record not update";
    }

