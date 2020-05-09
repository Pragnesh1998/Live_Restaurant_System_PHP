<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fsubcategory" action="updatescontroller.php"  method="POST">
            <table border="1px">
                <tr>
                    <th colspan="2">Subcategory</th>

                </tr>
                <tr>
                    <td>subcategory id</td>
                    <td><input type="text" name="txtsid"></td>
                </tr>

                <tr>
                    <td>subcategory_name</td>
                    <td><input type="text" name="txtsname"></td>
                </tr>

                <tr>
                    <td>category</td>
                    <td>
                        <select name="drdcname" value="drdcname">
                            <?php
                            include '\Connection.php';
                            $query = "select * from  tbl_category";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo"<option value='" . $row['category_id'] . "'>$row[category_name]</option>";
                                }
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>

            </table>
        </form>
    </body>
</html>
