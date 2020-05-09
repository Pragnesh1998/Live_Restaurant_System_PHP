<!DOCTYPE html>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fcategory" action="updatecontroller.php" method="POST">
 
            <table border="1px">
                <tr>
                    <th colspan="2" >Category</th>
                </tr>
                <tr>

                    <td>category_id</td>
                    <td>
                        <?php
                        include '\Connection.php';
                        if (!$conn) {
                            echo "not connect" . mysqli_connect_errno();
                        }
                        $query = "select * from tbl_category where category_id = " . $_GET['category_id'];
                        $result = mysqli_query($conn, $query);

                        $row = mysqli_fetch_assoc($result);
                        echo "<input type='text'  name='txtid' value='$row[category_id]'/>";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>category_name</td>
                    <td><input type="text" name="txtname"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
