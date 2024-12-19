<?php 

session_start();

session_destroy();
// echo $_SESSION['email'];
header("location:loginsinglepage.php?msg=logout done ");

exit();
?>