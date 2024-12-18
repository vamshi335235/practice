<?php
session_start();

// Database connection
$servername = "localhost";
$dbusername = "root";  // Change this to your database username
$dbpassword = "";      // Change this to your database password
$dbname = "test";      // Database name

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['apply_leave'])) {
    // Get the leave application input values
    $student_id = $_SESSION['user_id'];  // Assuming the user is logged in and user_id is stored in session
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];

    // Insert the leave request into the database
    $sql = "INSERT INTO leave_applications (student_id, leave_type, start_date, end_date, reason, status) 
            VALUES (?, ?, ?, ?, ?, 'Pending')";  // Default status is 'Pending'

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("issss", $student_id, $leave_type, $start_date, $end_date, $reason);

        if ($stmt->execute()) {
            $success = "Leave application submitted successfully. It is under review.";
        } else {
            $error = "Error: " . $stmt->error;
        }
    } else {
        $error = "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Leave - ELMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .apply-leave-container {
            width: 100%;
            max-width: 500px;
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
        .error, .success {
            text-align: center;
            margin: 10px 0;
            padding: 10px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
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

    <div class="apply-leave-container">
        <h2>Apply for Leave</h2>

        <?php if (isset($success)): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php elseif (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="apply_for_leave.php">
            <label for="leave_type">Leave Type</label>
            <select name="leave_type" class="input-field" required>
                <option value="Sick">Sick</option>
                <option value="Personal">Personal</option>
                <option value="Emergency">Emergency</option>
                <option value="Other">Other</option>
            </select>

            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="input-field" required>

            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="input-field" required>

            <label for="reason">Reason</label>
            <textarea name="reason" class="input-field" rows="4" placeholder="Please explain the reason for your leave" required></textarea>

            <button type="submit" class="btn" name="apply_leave">Apply for Leave</button>
        </form>

        <div class="footer">
            <p><a href="dashboard.php">Back to Dashboard</a></p>
        </div>
    </div>

</body>
</html>
