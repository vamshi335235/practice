<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - E-Leave Management System</title>
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
            color: #007bff;
        }

        p {
            line-height: 1.6;
        }

        a {
            text-decoration: none;
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

        /* Services Section */
        .services-section {
            text-align: center;
            padding: 50px 20px;
            background: #fff;
        }

        .services-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .services-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .service-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 0.9rem;
        }

        .service-card i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
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

    <!-- Services Section -->
    <section class="services-section">
        <h1>Our Services</h1>
        <p>
            At E-Leave Management System (ELMS), we offer a range of services tailored to make leave management 
            seamless, efficient, and transparent for educational institutions.
        </p>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-calendar-check"></i>
                <h3>Leave Applications</h3>
                <p>Submit leave requests online, eliminating paperwork and delays.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-tasks"></i>
                <h3>Approval Tracking</h3>
                <p>Keep track of the approval process and view the status in real time.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-chart-bar"></i>
                <h3>Leave Reports</h3>
                <p>Generate detailed reports to analyze leave trends and statistics.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-bell"></i>
                <h3>Notifications</h3>
                <p>Receive automated email or SMS updates for leave approvals and reminders.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-user-cog"></i>
                <h3>Admin Tools</h3>
                <p>Advanced features for administrators to manage and review leave requests efficiently.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-users"></i>
                <h3>User-Friendly Interface</h3>
                <p>Enjoy a simple and intuitive platform designed for all users.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> E-Leave Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
