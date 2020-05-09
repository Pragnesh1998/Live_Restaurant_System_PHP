<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
            function updaterow(cid) {
                window.location.href = "updatecategory.php?category_id=" + cid;
            }</script>
    </head>
<body>
    <table border="1px">
        <th>category id</th>
        <th>category name</th>
        <th>Action</th>
        <?php
        include '\Connection.php';
        $query = "select * from tbl_category where category_id=category_id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr> <td>" . $row['category_id'] . "</td>"
                . "<td>" . $row['category_name'] . "</td>"
                . "<td><input type='button' onclick='updaterow($row[category_id])' value='update'/></td></tr>";
            }
        }
        ?>
    </table>

</body>
</html>
