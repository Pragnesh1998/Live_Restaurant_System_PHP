<?php
session_start();

include '.\Connection.php';
if (!$conn) {
    echo "not connect" . mysqli_connect_errno();
} else {
    $od = $_POST['dorderdate'];
    $tid = $_POST['drdtableid'];
    $dordertype = $_POST['drdordertype'];
    $dcategory = $_POST['drdcategory'];
    $dscategory = $_POST['drdscategory'];
    $query = "insert into tbl_order_bill(order_date,table_id,order_type_id,created_by)values('" . $od . "','" . $tid . "','" . $dordertype . "','" . $_SESSION['registration_id'] . "')";
    echo $query;
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "record insert";
    } else {
        echo "record not insert";
    }
}
