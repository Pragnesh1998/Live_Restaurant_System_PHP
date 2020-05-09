<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
             function deleterow(tid)
            {

                window.location.href = "DeleteTController.php?table_id="+tid;
            }
            function updaterow(tid) {
                window.location.href = "Updatetable.php?table_id=" + tid;
            }</script>
    </head>
<body>
    <table border="1px">
        <th>Table id</th>
        <th>Table name</th>
        <th>Table Capacity</th>
        <th>Delete</th>
        <th>Update</th>
        
        <?php
        include '\Connection.php';
        $query = "select * from tbl_table where table_id=table_id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr> <td>" . $row['table_id'] . "</td>"
                . "<td>" . $row['table_name'] . "</td>"
                         . "<td>" . $row['table_capacity'] . "</td>"
                          . "<td><input type='button' onclick=deleterow($row[table_id])' value='delete'/></td>"
                . "<td><input type='button' onclick='updaterow($row[table_id])' value='update'/></td></tr>";
            }
        }
        ?>
    </table>

</body>
</html>
