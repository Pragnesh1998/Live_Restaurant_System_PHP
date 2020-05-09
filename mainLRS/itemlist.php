<!DOCTYPE html>
<html>
    <head>
        <?php
        include './include/includeCss.php';
        ?>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function DeleteRow(fid)
            {

                window.location.href = "DeleteitemController.php?food_id=" + fid;
            }
            function updateRow(fid)
            {

                window.location.href = "updatefooditems.php?food_id=" + fid;
            }
        </script>
    </head>
    <body>
        <?php
        include './include/includeNavigation.php';
        ?>
        <section class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <form name="fitem" action="updatefooditems.php" method="POST">
                            <h2 class="text-uppercase">Menu</h2>
                            <p>Tomato is a delicious restaurant website template</p>
                    </div>
                </div>
            </div>
        </section>  

        <table border="1px">
            <th>Food Id</th>
            <th>Food Name</th>
            <th>Food Price</th>
            <th>sub_category_id</th>
            <th>Delete</th>
            <th>Update</th>
            <?php
            include '\Connection.php';
            //$query = "SELECT fi.*,sb.* from tbl_food_item fi LEFT JOIN tbl_subcategory sb ON fi.subcategory_id=sb.subcategory_id ";

            $query = "select * from tbl_food_item where food_id=food_id";
            $result = mysqli_query($conn, $query);
            if ($result) {
            while ($row = mysqli_fetch_array($result)){
            echo "<tr> <td>" . $row['food_id'] . "</td>"
            . "<td>" . $row['food_name'] . "</td>"
            . "<td>" . $row['food_price'] . "</td>"
            . "<td>" . $row['subcategory_id'] . "</td>"
            . "<td><input type='button' onclick='DeleteRow($row[food_id])' value='Delete'/></td>"
            . "<td><input type='button' onclick='updateRow($row[food_id])' value='Update'/></td></tr>";
            }
            } 
            ?>
        </table>        
    </body>
</html>
