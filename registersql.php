<?php

include_once('connection.php');

$name1=$_REQUEST['name1'];
$email1=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$hashed_password = password_hash($pass, PASSWORD_BCRYPT);


$sql = "INSERT INTO register(name,email,password) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$name1, $email1, $hashed_password);
$stmt->execute();
$result = $stmt->get_result();


if ($stmt->execute()) {
    header("location: login.php?msg=registration_successful");
} else {
    echo "Error: " . $result->error;
}

$stmt->close();
$conn->close();
?>
