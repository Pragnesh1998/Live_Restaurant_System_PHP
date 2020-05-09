
<?php

session_start();

include'.\Connection.php';
if (!$conn) {
    die(mysqli_connect_errno());
} else {
    $user = mysqli_real_escape_string($conn, stripcslashes($_POST['txtuser']));
    $password = mysqli_real_escape_string($conn, stripcslashes($_POST['txtpassword']));
    $query = "SELECT * FROM tbl_registration WHERE  user_name='" . $user . "'AND password='" . $password . "'";
    $result = mysqli_query($conn, $query);
    /* $query3= "Update tbl_login SET user_name='mukesh', password='mukesh98' WHERE user_id=7"; */

    /* if (mysqli_query($conn, $query1)) {
      echo "Update record";
      } else {
      echo "error" . $query1 . "<br>" . mysqli_error($conn);
      } */


    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['First_name'] = $data['First_name'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['registration_id'] = $data['registration_id'];
        echo "login successful";
        header("location: ../home.php");
    } else {
        $session['msg'] = "invalid username or password";
        echo $session['msg'];

        mysqli_free_result($result);
        mysqli_close($conn);
    }
}