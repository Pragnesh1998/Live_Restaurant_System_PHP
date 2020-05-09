<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function updateRow(regid)
            {

                window.location.href = "updateRegistration.php?registration_id=" + regid;
            }
        </script>
    </head>
    <body>
        <table>
            <th>registration_id</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>date_of_birth</th>
            <th>contact_no</th>
            <th>gender</th>
            <th>email_id</th>
            <th>user_name</th>
            <th>password</th>
            <th>user_type_name</th>
            <th>Action</th>
            <?php
            include '\Connection.php';
            $query = "SELECT tr.*,tu.* from tbl_register tr LEFT JOIN tbl_user_type tu ON tu.user_type_id=tr.user_type_id ";


            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr> <td>" . $row['registration_id'] . "</td>"
                    . "<td>" . $row['First_name'] . "</td>"
                    . "<td>" . $row['Last_name'] . "</td>"
                    . "<td>" . $row['date_of_birth'] . "</td>"
                    . "<td>" . $row['Phone_number'] . "</td>"
                    . "<td>" . $row['Gender'] . "</td>"
                    . "<td>" . $row['email'] . "</td>"
                    . "<td>" . $row['user_name'] . "</td>"
                    . "<td>" . $row['password'] . "</td>"
                    . "<td>" . $row['user_type_name'] . "</td>"
                    . "<td><input type='button' onclick='updateRow($row[registration_id])' value='Update'/></td></tr>";
                }
            }
            ?>
        </table>        
    </body>
</html>
