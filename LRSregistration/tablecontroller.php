<?php

include'\Connection.php';
if (!$conn) {
    echo "connection not found" . mysqli_connect_errno();
} else {
    $tname = $_POST['txttblname'];
    $tcapacity = $_POST['txtcapacity'];
}
$query = "insert into tbl_table(table_name,table_capacity) values('" . $tname . "','" . $tcapacity . "')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "record insert";
} else {
    echo " record not inserted";
}
