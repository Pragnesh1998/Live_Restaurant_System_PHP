<?php
include '\Connection.php';
$id=$_POST['txtsid'];
$name=$_POST['txtsname'];
$query="update tbl_subcategory set subcategory_name='$name' where subcategory_id='$id'";
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

