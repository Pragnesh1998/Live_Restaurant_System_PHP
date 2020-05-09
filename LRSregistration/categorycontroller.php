<?php
include'\Connection.php';
if(!$conn)
{
    echo "connection not found".mysqli_connect_errno();
}
 else {
$cid=$_POST['txtCategoryId'];
$cname=$_POST['txtCategoryName'];
}
$query="insert into tbl_category(category_id,category_name)values('".$cid."','".$cname."')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "record insert";
   }
 else {
echo "record not inserted";       
}

