<?php
$email1=$_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="checkforgotpass.php?email=<?php echo $email1?>" method="post">
        <input type="password" name="newpassword" id="" placeholder="new pass">
        <input type="password" name="confirmpassword" id="" placeholder="confirm pass">
        <!-- <input type="hidden" name="submit"> -->
        <input type="submit" value="update password">
    </form>

</body>

</html>