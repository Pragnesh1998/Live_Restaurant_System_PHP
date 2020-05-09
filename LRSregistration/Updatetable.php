<!DOCTYPE html>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="ftable" action="UpdateTcontroller.php" method="POST">
 
            <table border="1px">
                <tr>
                    <th colspan="2" >Table</th>
                </tr>
                <tr>

                    <td>table_id</td>
                    <td>
                        <?php
                        include '\Connection.php';
                        if (!$conn) {
                            echo "not connect" . mysqli_connect_errno();
                        }
                        $query = "select * from tbl_table where table_id = " . $_GET['table_id'];
                        $result = mysqli_query($conn, $query);

                        $row = mysqli_fetch_assoc($result);
                        echo "<input type='text'  name='txtid' value='$row[table_id]'/>";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>table_name</td>
                    <td><input type="text" name="txtname"></td>
                </tr>
                <tr>
                    <td>Table Capacity</td>
                    <td><input type="text" name="txtcapacity"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
