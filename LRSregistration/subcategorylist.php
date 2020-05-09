<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
            function updaterow(sid) {
                window.location.href = "updatesubcategory.php?subcategory_id=" + sid;
            }</script>
    </head>
<body>
    <table border="1px">
        <th>subcategory id</th>
        <th> subcategory name</th>
        <th>category_id</th>
        <th>Action</th>
        <?php
        include '\Connection.php';
        $query = "select * from tbl_subcategory where subcategory_id=subcategory_id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr> <td>" . $row['subcategory_id'] . "</td>"
                . "<td>" . $row['subcategory_name'] . "</td>"
                        . "<td>" . $row['category_id'] . "</td>"
                . "<td><input type='button' onclick='updaterow($row[subcategory_id])' value='update'/></td></tr>";
            }
        }
        ?>
    </table>

</body>
</html>
