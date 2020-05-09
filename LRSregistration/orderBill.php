<!DOCTYPE html>
<?php
 session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="forder" action="UpdateOcontroller.php" method="POST">
            <table border="1px">
                <tr>
                    <th colspan="6">Order Bill</th>

                </tr>
                <tr>
                    <td>order_date</td>
                    <td colspan="5"><input  type="date" name="dorderdate">
                </tr>
                <tr>
                    <td>tableid</td>
                    <td colspan="5">
                        <select name="drdtableid">
                            <?php
                            include '\Connection.php';
                            if (!$conn) {
                                echo "not connect" . mysqli_connect_errno();
                            } else {
                                $query = "select * from tbl_table";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo"<option value='" . $row['table_id'] . "'>$row[table_name]</option>";
                                    }
                                }
                            }
                            ?>
                    </td>
                <tr>
                    <td>order type</td>
                    <td>
                        <select name="drdordertype">
                            <?php
                            include '\Connection.php';
                            if (!$conn) {
                                echo "not connect" . mysqli_connect_errno();
                            } else {
                                $query = "select * from tbl_order_type";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo"<option value=' " . $row['order_type_id'] . "'>" . $row['order_type_name'] . "</option>";
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Food Item</td>
                    <td colspan="5">

                        <select name="drditem">
                            <?php
                            include '\Connection.php';
                            if (!$conn) {
                                echo "not connect" . mysqli_connect_errno();
                            } else {
                                $query = "select * from tbl_food_item";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo"<option value=' " . $row['food_id'] . "'>" . $row['food_name'] . "</option>";
                                    }
                                }
                            }
                            ?> 
                        </select>
                    </td>
                </tr>
                <tr>

                    <td>category</td>
                    <td>
                        <select name="drdcategory">
                            <?php
                            include '\Connection.php';
                            if (!$conn) {
                                echo "not connect" . mysqli_connect_errno();
                            } else {
                                $query = "select * from tbl_category";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo"<option value=' " . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td>subcategory</td>
                    <td>
                        <select name="drdscategory">
                            <?php
                            include '\Connection.php';
                            if (!$conn) {
                                echo "not connect" . mysqli_connect_errno();
                            } else {
                                $query = "select * from tbl_subcategory";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo"<option value=' " . $row['subcategory_id'] . "'>" . $row['subcategory_name'] . "</option>";
                                    }
                                }
                            }
                            ?>
                        </select>

                </tr>
                <td colspan="6" align="center"><input type="submit" name="brnsubmit"></td>
                </tr> 
            </table>
        </form>
    </body>
</html>
