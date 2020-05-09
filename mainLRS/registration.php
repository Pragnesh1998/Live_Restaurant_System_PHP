<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fname" action="RegistrationController.php" method="post">

            <table  border="1px">
                <th class="login" colspan="2" >Registration</th>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="txtFirst"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="txtLast"></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><input type="date" name="txtBirth"></td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td><input type="text" name="txtContact"></td>
                </tr>
                <tr>
                    <th>UserName</th>
                    <td><input type="text" name="txtuser" id="txtuser"></td>

                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="txtpassword" id="txtpassword"></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input type="text" name="txtEmail"></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>Male<input type="radio" name="rbtgen" value=Male">
                        Female<input type="radio" name="rbtgen" value=Female"></td>
                </tr>
                <tr>
                <select name="drduser" value="drduser">
                    <?php
                    $conn=mysqli_connect("localhost","root","","lrsregistration");
                    if(!$conn)
                    {
                        echo "not connect".mysqli_connect_errno();
                    }
                    $query = "select * from tbl_user_type";
                    $result = mysqli_query($conn,$query);
                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo"<option value='".$row['user_type_id']."'>.$row[user_type_name].</option>";
                        }
                    }
                    ?>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit"></td>
                    </tr>





            </table>
        </form>

    </body>
</html>
