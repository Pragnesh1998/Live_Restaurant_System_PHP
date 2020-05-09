<?php
session_start();
                include'\Connection.php';
mysqli_autocommit($conn, FALSE);
if (!$conn) {
    die("connection error" . mysqli_connect_errno());
} else {
    $firstname = $_POST['txtFname'];
    $lastname = $_POST['txtLname'];
    $birthdate = $_POST['dbday'];  
    
    $contact = $_POST['txtphone'];
    $gender=$_POST['rbtngender'];
    $emailid = $_POST['txtemail'];
    $user = $_POST['txtusername'];
    $password = $_POST['psd'];
   $usertype=$_POST['drdusert'];
 $flag=true;
    $valid_formats = array("jpg", "jpeg", "png");
$max_file_size = 1024 * 1024 * 1; 
$targetPath = "";
$flagFileUpload = FALSE;
if (isset($_FILES["FlUserPhoto"]["type"])) {

    $file_extension = strtolower(pathinfo($_FILES["FlUserPhoto"]["name"], PATHINFO_EXTENSION));
   
    if (($_FILES["FlUserPhoto"]["size"] <= $max_file_size) && in_array($file_extension, $valid_formats)) {
        if ($_FILES["FlUserPhoto"]["error"] > 0) {
            $flag = FALSE;
            echo "Please enter valid photo: " . $_FILES["FlUserPhoto"]["error"] . "<br/><br/>";
        } else {
            $sourcePath = $_FILES['FlUserPhoto']['tmp_name']; // Storing source path of the file in a variable
            $targetPath = './image/' . time() . '_' . uniqid() . '.' . $file_extension; // Target path where file is to be stored
            $fileResult = move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file    
            $flagFileUpload = TRUE;
        }
    }
}


    $query = "insert into tbl_register(First_name,Last_name,date_of_birth,Phone_number,Gender,email,user_name,password,user_type_id,Users_photo) values('".$firstname."','".$lastname."','".$birthdate."','".$contact."','".$gender."','".$emailid."','".$user."','".$password."','".$usertype."','".$targetPath . "')";
echo $query;   
//$query1 = "SELECT * FROM tbl_registration Where First_name='".$firstname."' user_name='" .$user ."'AND password='" . $password. "'AND user_type_id='".$usertype. "'";//
   // $query3="Update tbl_registration set date_of_birth='$birthdate' Where registration_id=2";//
$result=mysqli_query($conn,$query);    
/* if(mysqli_num_rows($result)>0)
        {
        $data=  mysqli_fetch_assoc($result);
            $session['role_id']=$data['user_type_id'];
            $session['reg_id']=$data['registration_id'];
            $session['first_name']=$data['First_name'];
            $session['user_name']=$data['user_name'];
            $session['psw']=$data['password'];
        }*/
       if ($result) {
   mysqli_commit($conn);
    $_SESSION['msg'] = "Recored Inserted";
} else {
    mysqli_rollback($conn);
    unlink($targetPath);
    $_SESSION['msg'] = "Record Not Inserted";
}


        
   
 
}
    
    