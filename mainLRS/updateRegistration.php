<?php
session_start();
?>
<html>
  <head>
      <?php
      include'./include/includeCss.php';  
      ?>
      <?php
      include './include/includeNavigation.php'?>;

      <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fname" action="updateController.php" method="post">

            <table  border="1px">
                <th class="login" colspan="2" >Registration</th>
                <?php
                include './Connection.php';
                $query="select * from tbl_register where registration_id=".$_SESSION['registration_id'];
                $result=mysqli_query($conn,$query);
                if($result){
                   $row=  mysqli_fetch_assoc($result);
                           echo "<input type='text' name='txtid' value='$row[registration_id]'/>";
                }
                
                ?>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="txtFname" value="<?php echo $row['First_name'];?>"</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="txtLname" value="<?php echo $row['Last_name'];?>"</td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><input type="date" name="dbday" value="<?php echo $row['date_of_birth'];?>"'></td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td><input type="text" name="txtphone" value="<?php echo $row['Phone_number'];?>"></td>
                </tr>
                <tr>
               <td>Gender</td>
                    <td>Male<input type="radio" name="rbtngender" value="<?php echo $row['Gender'];?>" >
                        Female<input type="radio" name="rbtngender" value="<?php echo $row['Gender'];?>"></td>
                </tr>
                <tr>
                   <td>Email Id</td>
                    <td><input type="text" name="txtemail" value="<?php echo $row['email'];?>"></td>
                </tr>

                <tr>
                    <td>User name</td>
                     <td><input type="text" name="txtusername" value="<?php echo $row['user_name'];?>"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="psd" id="txtpassword" value="<?php echo $row['password'];?>"></td>
                </tr>
                
               
                <tr>
                    <td>user type id</td>
                    <td>
                <select name="drdusert" value="drdusert">
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
                            echo"<option value='".$row['user_type_id']."'selected>$row[user_type_id]</option>";
                        }
                    }
                    ?>
                </select>
                    </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit"></td>
                    </tr>





            </table>
        </form>

    </body>
</html>
