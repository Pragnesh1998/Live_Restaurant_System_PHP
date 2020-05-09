<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>

            function updaterow(oid) {
                window.location.href = "UpdateBill.php?order_bill_id=" + oid;
            }</script>
    </head>
<body>
    <table border="1px">
        <th>Order Bill id</th>
        <th>order date</th>
        <th>Table id</th>
        <th>Order Type name</th>
        <th>Update</th>

        <?php
        include '\Connection.php';
        $query = "SELECT tr.*,tu.* from tbl_order_bill tr LEFT JOIN tbl_order_type tu ON tu.order_type_id=tr.order_type_id ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr> <td>" . $row['order_bill_id'] . "</td>"
                . "<td>" . $row['order_date'] . "</td>"
                . "<td>" . $row['table_id'] . "</td>"
                . "<td>" . $row['order_type_name'] . "</td>"
                . "<td><input type='button' onclick='updaterow($row[order_bill_id])' value='update'/></td></tr>";
            }
        }
        ?>
    </table>

</body>
</html>
