<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - E-Leave Management System</title>
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

        /* About Section */
        .about-section {
            text-align: center;
            padding: 50px 20px;
            background: #fff;
        }

        .about-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-details {
            padding: 40px 20px;
            background: #e9ecef;
        }

        .about-details h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .about-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .about-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .about-card p {
            font-size: 0.9rem;
        }

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
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <section class="about-section">
        <h1>About Us</h1>
        <p>
            The E-Leave Management System (ELMS) is a robust platform designed to streamline the leave management process 
            for educational institutions. Our mission is to enhance efficiency, improve transparency, and reduce paperwork, 
            enabling seamless communication between students, teachers, and administrators.
        </p>
    </section>

    <!-- About Details -->
    <section class="about-details">
        <h2>Our Values</h2>
        <div class="about-grid">
            <div class="about-card">
                <h3>Efficiency</h3>
                <p>
                    Automating the leave management process to save time and resources.
                </p>
            </div>
            <div class="about-card">
                <h3>Transparency</h3>
                <p>
                    Providing real-time updates on leave requests and approvals.
                </p>
            </div>
            <div class="about-card">
                <h3>Innovation</h3>
                <p>
                    Continuously improving our platform to meet the needs of modern institutions.
                </p>
            </div>
            <div class="about-card">
                <h3>Reliability</h3>
                <p>
                    Offering a secure and dependable system for managing leave workflows.
                </p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> E-Leave Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
