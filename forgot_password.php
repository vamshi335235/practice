<?php
include_once ('connection.php');
$errorMessage = '';  

if (isset($_POST['mental'])) {
    // $email1 = mysqli_real_escape_string($conn, $_POST['email']);
    $email1=$_REQUEST['email'];
    $sql="SELECT * FROM register WHERE email='$email1'";
$result=mysqli_query($conn,$sql );
if (mysqli_num_rows($result) > 0) {
    
    header("location: update_password.php?email='$email1'");
}
else{
     $errorMessage = "Email not found! Please try again.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>
    <form action="forgot_password.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="hidden" name="mental">
        <input type="submit" name="submit" value="Verify Email">
    </form>

    <!-- Display error message if email is not found -->
    <?php
    if (!empty($errorMessage)) {
        echo '<p style="color: red;">' . $errorMessage . '</p>';
    }
    ?>
</body>
</html>
