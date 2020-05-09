<?php
include '\Connection.php';
$id=$_POST['txtoid'];
$date=$_POST['dorder'];
$tableid=$_POST['drdtname'];
$otype=$_POST['drdotname'];
$query="update tbl_order_bill set order_date='$date',table_id='$tableid',order_type_id='$otype' where order_bill_id='$id'";
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

