<?php
include'\Connection.php';
if(!$conn)
{
    echo "connection invalid".mysqli_connect_errno();
}
 else {
    // $cid=$_POST['txtCategoryId'];
     
$sname=$_POST['txtsname'];
//$categorytype=$_POST['txtcname'];
}
$query="insert into tbl_subcategory(subcategory_name) values('$sname')";
$result=mysqli_query($conn,$query);
echo $query;
  if($result)
  {
      echo "record inserted";
  }
 else {
echo "record not inserted";      
}