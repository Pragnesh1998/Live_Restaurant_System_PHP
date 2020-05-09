<?php
include '\Connection.php';
$id=$_POST['txtid'];
$name=$_POST['txtname'];
$query="update tbl_category set category_name='$name' where category_id='$id'";
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

