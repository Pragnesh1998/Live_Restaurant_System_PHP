<?php
include '\Connection.php';
$id=$_POST['txtid'];
$name=$_POST['txtname'];
$capacity=$_POST['txtcapacity'];
$query="update tbl_table set table_name='$name', table_capacity='$capacity' where table_id='$id'";
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

