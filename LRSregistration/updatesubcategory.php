<!DOCTYPE html>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fcategory" action="updatescontroller.php" method="POST">

            <table border="1px">
                <tr>
                    <th colspan="2" >sub Category</th>
                </tr>
                <tr>

                    <td>subcategory_id</td>
                    <td>
                        <?php
                        include '\Connection.php';
                        if (!$conn) {
                            echo "not connect" . mysqli_connect_errno();
                        } else {
                            $query = "SELECT * from tbl_subcategory where subcategory_id=" . $_GET['subcategory_id'];
                            $result = mysqli_query($conn, $query);

                            $row = mysqli_fetch_assoc($result);
                          $data=mysqli_fetch_assoc($result);
                            if ($row['category_id'] == $data['subcategory_id']) {
                                echo"<option value='" . $row['category_id'] . "'selected>" . $data['subcategory_id'] . "</option>";
                            } else {
                                echo"<option value='" . $row['category_id'] . "'>" . $data['subcategory_id'] . "</option>";
                            }
                        }
                        echo "<input type='text' name='txtsid' value='$row[subcategory_id]'/>";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>category_name</td>
                    <td>
                        <select name="drdcname" value="drdcname">
                            <?php
                            include '\Connection.php';
                            $query = "select * from  tbl_category";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($show = mysqli_fetch_array($result)) {
                                    if ($show['category_id'] == $row['category_id']) {
                                        echo"<option value='" . $show['category_id'] . "' selected>$show[category_name]</option>";
                                    } else {
                                        echo"<option value='" . $show['category_id'] . "'>$show[category_name]</option>";
                                    }
                                }
                            }
                                
                            
                            ?>
                            
                        </select></td>
                </tr>
                <tr>
                    <td>subcategory_name</td>
                    <td>
                        <select name="drdsname" value="drdsname">
                            <?php
                            include '\Connection.php';
                            $query = "select * from  tbl_subcategory";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($show = mysqli_fetch_array($result)) {
                                    if ($show['subcategory_id'] == $row['subcategory_id']) {
                                        echo"<option value='" . $show['subcategory_id'] . "' selected>$show[subcategory_name]</option>";
                                    } else {
                                        echo"<option value='" . $show['subcategory_id'] . "'>$show[subcategory_name]</option>";
                                    }
                                }
                                
                            }
                            echo "<input type='text' name='txtname' value='$row[subcategory_name]'/>";
                           
   ?>
               

                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
