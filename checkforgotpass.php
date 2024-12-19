<?php
include_once('connection.php');
$email = $_GET['email'];
if (isset($email)) {
    $newpass = $_REQUEST['newpassword'];
    $confirm_pass = $_REQUEST['confirmpassword'];
       
        if ($newpass == $confirm_pass) {
            echo $newpass;
            echo $confirm_pass;
            $sql = "UPDATE register SET password= '$newpass' WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "update  done";
            }else{
                echo "update not done";
            }
        }else{
            header("location: forgot_password.php?msg=enter same passwords");
        }
}

?>