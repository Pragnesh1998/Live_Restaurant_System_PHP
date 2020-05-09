<?php
include'\Connection.php';
$id=$_GET['registration_id'];
$query="delete from tbl_registration where registration_id='".$id."'";
$result=mysqli_query($conn,$query);
if($result)
{
    while ($row = mysqli_fetch_row($query)) 
     {
        echo "delete the record";
    }
}


 