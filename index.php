<?php

if (isset($_SESSION['email'])==null) {
    header("location: loginsinglepage.php");
}else{
    
    header("location: dashboard1.php");
}

?>
