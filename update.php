<?php
include_once 'connection.php';
$id1=$_REQUEST['id'];
$name1=$_REQUEST['name'];
$email1=$_REQUEST['email'];
$sql="UPDATE register SET name='$name1' , email='$email1' WHERE id='$id1'";
$q=mysqli_query($conn,$sql);
if ($q) {
   echo "update done";
header("location:edit.php?id=$id1&msg=updatedone");
}else{
    echo "update not done";
}
?>
