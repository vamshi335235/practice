<?php
session_start();
$servername = "localhost";
$dbusername = "root";  
$dbpassword = "";      
$dbname = "test";      

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sql = "SELECT id, username FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username);
        $stmt->fetch();
        $reset_link = "http://localhost/reset_password.php?user_id=" . $id;
        $subject = "Password Reset Request";
        $message = "Hello $username,\n\nTo reset your password, click the following link:\n$reset_link\n\nIf you didn't request this, please ignore this email.";
        $headers = "From: no-reply@elms.com";
        if (mail($email, $subject, $message, $headers)) {
            $_SESSION['success'] = "A password reset link has been sent to your email.";
        } else {
            $_SESSION['error'] = "Failed to send the password reset email.";
        }
    } else {
        $_SESSION['error'] = "No account found with that email address.";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELMS - Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error, .success {
            color: red;
            text-align: center;
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Forgot Password</h2>
        
        <?php if (isset($_SESSION['error'])): ?>
            <div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <form method="POST" action="forgot_password.php">
            <label for="email">Enter your email address</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" class="btn">Submit</button>
        </form>

        <div class="footer">
            <p>Remember your password? <a href="login.php">Login here</a></p>
        </div>
    </div>

</body>
</html>
