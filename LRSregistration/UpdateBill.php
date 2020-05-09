<!DOCTYPE html>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="forder" action="UpdateOcontroller.php" method="POST">

            <table border="1px">
                <tr>
                    <th colspan="2" >Order Bill</th>
                </tr>
                <tr>

                    <td>order bill id</td>
                    <td>
                        <?php
                        include '\Connection.php';
                        if (!$conn) {
                            echo "not connect" . mysqli_connect_errno();
                        } else {
                            $query = "SELECT * from tbl_order_bill where order_bill_id=" . $_GET['order_bill_id'];
                            $result = mysqli_query($conn, $query);

                            $row = mysqli_fetch_assoc($result);
                          $data=mysqli_fetch_assoc($result);
                            if ($row['table_id'] == $data['order_bill_id']) {
                                echo"<option value='" . $row['table_id'] . "'selected>" . $data['order_bill_id'] . "</option>";
                            } else {
                                echo"<option value='" . $row['table_id'] . "'>" . $data['order_bill_id'] . "</option>";
                            }
                        }
                        echo "<input type='text' name='txtoid' value='$row[order_bill_id]'/>";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>order date</td>
                    <td><input type="date" name="dorder"></td>
                 </tr>
                <tr>
                    <td>table name</td>
                    <td>
                         <select name="drdtname" value="drdtname">
                            <?php
                            
                            include '\Connection.php';
                            $query = "select * from  tbl_table";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($show = mysqli_fetch_array($result)) {
                                    if ($show['table_id'] == $row['table_id']) {
                                        echo"<option value='" . $show['table_id'] . "' selected>$show[table_name]</option>";
                                    } else {
                                        echo"<option value='" . $show['table_id'] . "'>$show[table_name]</option>";
                                    }
                                }
                                
                            }
                            
                            echo "<input type='text' name='txttname' value='$row[table_id]'/>";
                           ?>
                            <tr>
                            <td>Order Type Name</td>
                                 <td>
                        <select name="drdotname" value="drdotname">
                            <?php
                            include '\Connection.php';
                            $query = "select * from  tbl_order_type";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($show = mysqli_fetch_array($result)) {
                                    if ($show['order_type_id'] == $row['order_type_id']) {
                                        echo"<option value='" . $show['order_type_id'] . "' selected>$show[order_type_name]</option>";
                                    } else {
                                        echo"<option value='" . $show['order_type_id'] . "'>$show[order_type_name]</option>";
                                    }
                                }
                                
                            }
                            echo "<input type='text' name='txtotname' value='$row[order_type_id]'/>";
                           
   ?>
   
                            </tr>

               
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
