<?php
include'\Connection.php';
if(!$conn)
{
    echo "connection not found".mysqli_connect_errno();
}
 else {
//$categoryid=$_POST['txtCategoryId'];
$categoryname=$_POST['txtCategoryName'];
}
$query="insert into tbl_category(category_name)values('$categoryname')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "record insert";
   }
 else {
echo "record not inserted";       
}

