<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, password FROM register WHERE password IS NULL OR password = ''";
$result = $conn->query($sql);
if (!$result) {
    die("Error executing query: " . $conn->error);
}
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $password = $row['password'];

        $encodedPassword = base64_encode($password);
        $updateSql = "UPDATE register SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($updateSql);

        if (!$stmt) {
            die("Error preparing query: " . $conn->error);
        }
        $stmt->bind_param("si", $encodedPassword, $id);
        if ($stmt->execute()) {
            echo "Password encoded and updated for user ID: $id\n";
        } else {
            echo "Error updating password for user ID: $id - " . $stmt->error . "\n";
        }
        $stmt->close();
    }
} else {
    echo "No users found with plaintext passwords to encode.\n";
}

$conn->close();
?>
