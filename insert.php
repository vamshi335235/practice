<?php 
$conn =mysqli_connect("localhost","hlo","","test");

$id1= $_REQUEST['id'];

$name1= $_REQUEST['name'];
$age1= $_REQUEST['roll number'];



$sql="INSERT INTO (id,name,roll number)VALUES('$id1','$name1','$rollnumber1','$Edit','$Delete')";
mysqli_query($conn,$sql);


?>