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

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'admin') {
    header("Location: login.php");  // Redirect to login if the user is not logged in or is not an admin
    exit();
}

// Fetch leave applications and associated student information
$sql = "SELECT la.id, u.name, la.leave_type, la.start_date, la.end_date, la.reason, la.status 
        FROM leave_applications la
        JOIN users u ON la.student_id = u.id
        ORDER BY la.start_date DESC";

$result = $conn->query($sql);

// Check if any leave applications exist
if ($result->num_rows > 0) {
    $leave_reports = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $message = "No leave applications found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports - ELMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .reports-container {
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
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

    <div class="reports-container">
        <h2>Leave Applications Report</h2>

        <?php if (isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Reason</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($leave_reports as $report): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($report['name']); ?></td>
                            <td><?php echo htmlspecialchars($report['leave_type']); ?></td>
                            <td><?php echo htmlspecialchars($report['start_date']); ?></td>
                            <td><?php echo htmlspecialchars($report['end_date']); ?></td>
                            <td><?php echo htmlspecialchars($report['reason']); ?></td>
                            <td><?php echo htmlspecialchars($report['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="footer">
            <p><a href="dashboard.php">Back to Dashboard</a></p>
        </div>
    </div>

</body>
</html>
