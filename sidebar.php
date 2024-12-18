<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Leave Management System (ELMS) - Sidebar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
        }

        h1, h2, h3 {
            color: #007bff;
        }

        p {
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }
        .sidebar {
            height: 100vh; 
            width: 250px;
            position: fixed; 
            top: 0;
            left: 0;
            background: #007bff;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .sidebar ul li {
            width: 100%;
            text-align: center;
        }

        .sidebar ul li a {
            display: block;
            padding: 15px;
            color: white;
            background-color: #007bff;
            font-weight: bold;
            border-bottom: 1px solid #ffffff;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #0056b3;
        }
        .sidebar ul li a.active {
            background-color: #0056b3;
            color: white;
        }

        /* Main content styling */
        .content {
            margin-left: 250px; /* Offset for the sidebar */
            padding: 20px;
        }

        /* Responsive Design: Sidebar and Content */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding-top: 15px;
            }

            .content {
                margin-left: 0;
            }
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="home.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active' : ''; ?>">Dashboard</a></li>
            <li><a href="apply_leave.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'apply_leave.php') ? 'active' : ''; ?>">Apply for Leave</a></li>
            <li><a href="leave_status.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'leave_status.php') ? 'active' : ''; ?>">Check Leave Status</a></li>
            <li><a href="reports.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'reports.php') ? 'active' : ''; ?>">View Reports</a></li>
            <li><a href="settings.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'settings.php') ? 'active' : ''; ?>">Account Settings</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>

</body>
</html>
