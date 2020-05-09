<?php
session_start();
include '\Connection.php';
$firstname = $_POST['txtFname'];
    $lastname = $_POST['txtLname'];
    $birthdate = $_POST['dbday'];  
    $contact = $_POST['txtphone'];
    $gender=$_POST['rbtngender'];
    $emailid = $_POST['txtemail'];
    $user = $_POST['txtusername'];
    $password = $_POST['psd'];
   $usertype=$_POST['drdusert'];
$query="UPDATE `lrsregistration`.`tbl_register` SET  `First_name`='$firstname',`Last_name`='$lastname', `date_of_birth`='$birthdate', `Phone_number`='$contact',`Gender`='$gender',`email`='$emailid', `user_name`='$user', `password`='$password', `user_type_id`='$usertype' WHERE `registration_id`=.$_SESSION[registration_id]";
echo $query;
$result=mysqli_query($conn,$query);
if($result)
{
    echo "update record";
    
}
    else
    {
        echo "record not update";
    }

