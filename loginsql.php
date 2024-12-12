<?php
include_once('connection.php');
    $email1=$_REQUEST['name'];
    $pass1=$_REQUEST['rollno'];

    
    $sql = "SELECT * FROM hlo WHERE name = ? AND rollnumber = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email1, $pass1); // "ss" indicates two string parameters
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "Login done";
    } else {
        echo "Please enter again";
    }
    // Close the statement
    $stmt->close();
    


?>