<?php
include'\Connection.php';
if(!$conn)
{
    echo "connection invalid".mysqli_connect_errno();
}
 else {
$sname=$_POST['txtsname'];
$categorytype=$_POST['drdcname'];
}
$query="insert into tbl_subcategory(subcategory_name,category_id) values('".$sname."','".$categorytype."')";
$result=mysqli_query($conn,$query);
  if($result)
  {
      echo "record inserted";
  }
 else {
echo "record not inserted";      
}