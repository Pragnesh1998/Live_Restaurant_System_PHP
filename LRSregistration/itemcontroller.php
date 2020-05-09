<?php
include '\Connection.php';
if(!$conn)
{
    echo "Connection invalid".mysqli_connect_errno();
}
else
{
    $foodname=$_POST['txtFoodName'];
    $foodprice=$_POST['txtFoodPrice'];
    $subid=$_POST['txtcid'];
   

$query="insert into tbl_food_item(food_name,food_price,subcategory_id)values('".$foodname."','".$foodprice."'.'".$subid."')";
echo $query;
$result=mysqli_query($conn,$query);
if($result)
{
    echo "record inserted";
    
}
else
{
    echo "record not inserted";
}
}