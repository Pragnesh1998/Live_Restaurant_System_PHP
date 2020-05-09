<?php
session_start();
include'\Connection.php';
if (!$conn) {
    die("connection error" . mysqli_connect_errno());
} else {
    $firstname = $_POST['txtFname'];
    //$lastname = $_POST['txtLast'];
    //$birthdate = $_POST['txtBirth'];
    //$contact = $_POST['txtContact'];
    //$emailid = $_POST['txtEmail'];
    $user = $_POST['txtuser'];
    $password = $_POST['txtpassword'];
    //$gender=$_POST['rbtgen'];
    $usertype=$_POST['drduser'];
    //$query = "insert into tbl_registration(First_name,Last_name,date_of_birth,contact_no,user_name,password,email_id,gender,user_type_id) values('".$firstname."','".$lastname."','".$birthdate."','".$contact."','".$user."','".$password."','".$emailid."','".$gender."','".$usertype."')";
   $query1 = "SELECT * FROM tbl_registration Where First_name='".$firstname."' user_name='" .$user ."'AND password='" . $password. "'AND user_type_id='".$usertype. "'";//
   // $query3="Update tbl_registration set date_of_birth='$birthdate' Where registration_id=2";//
$result=mysqli_query($conn,$query1);    
    if(mysqli_num_rows($result)>0)
        {
        $data=  mysqli_fetch_assoc($result);
            $session['role_id']=$data['user_type_id'];
            $session['reg_id']=$data['registration_id'];
            $session['first_name']=$data['First_name'];
            $session['user_name']=$data['user_name'];
            $session['psw']=$data['password'];
        }
        
 else {
      $session['msg']="invalid user";
 }
             mysqli_free_result($result);
    mysqli_close($conn);
}

    
    