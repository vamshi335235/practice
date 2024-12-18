<?php
include_once('connection.php');
if (isset($_POST['submit'])) 
{

    $email1=$_REQUEST['name'];
    $pass1=$_REQUEST['rollno'];
    $sql = "SELECT * FROM register WHERE name = ? AND rollnumber = ?";
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
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELMS - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .login-container {
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
        .error {
            color: red;
            text-align: center;
            margin: 10px 0;
        }
        .input-field {
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
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login to ELMS</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="home.php">
            <input type="text" name="username" class="input-field" placeholder="Username" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <button type="submit" class="btn" name="login">Login</button>
        </form>

        <div class="footer">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
            <p><a href="forgot_password.php">Forgot Password?</a></p>
        </div>
    </div>

</body>
</html>
