<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - E-Leave Management System</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
        }

        h1, h2, h3 {
            color:rgb(1, 8, 16);
        }

        a {
            text-decoration: none;
        }

        p {
            line-height: 1.6;
        }

        /* Navbar Styles */
        .navbar {
            background: #007bff;
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: #fff;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .cta-buttons a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background: #fff;
            color: #007bff;
            border-radius: 5px;
            font-weight: bold;
        }

        .cta-buttons a:hover {
            background: #0056b3;
            color: #fff;
        }

        /* Features Section */
        .features-section {
            padding: 40px 20px;
            text-align: center;
            background: #fff;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .feature-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 0.9rem;
        }

        /* Why ELMS Section */
        .why-elms {
            padding: 40px 20px;
            text-align: center;
            background: #e9ecef;
            margin: 20px 0;
        }

        .why-elms h2 {
            margin-bottom: 20px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            background: #007bff;
            color: #fff;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-content">
            <h1>Welcome to E-Leave Management System (ELMS)</h1>
            <p>A modern solution to streamline leave management for students and administrators.</p>
    </header>

    <!-- Features Section -->
    <section class="features-section">
        <h2>Key Features of ELMS</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Apply for Leaves</h3>
                <p>Easily submit leave applications with a few clicks.</p>
            </div>
            <div class="feature-card">
                <h3>Track Approvals</h3>
                <p>Monitor the status of your leave requests in real-time.</p>
            </div>
            <div class="feature-card">
                <h3>Efficient Approvals</h3>
                <p>Streamlined leave approvals for teachers and administrators.</p>
            </div>
            <div class="feature-card">
                <h3>Reports & Insights</h3>
                <p>Access detailed leave reports for better management.</p>
            </div>
        </div>
    </section>

    <!-- Why ELMS Section -->
    <section class="why-elms">
        <h2>Why Choose ELMS?</h2>
        <p>
            The E-Leave Management System is tailored for educational institutions, offering 
            a simple and efficient platform to manage leave processes. By digitizing 
            workflows, ELMS eliminates paperwork, reduces processing time, and improves 
            transparency.
        </p>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> E-Leave Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
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
