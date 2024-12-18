<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - E-Leave Management System</title>
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

        /* Contact Section */
        .contact-section {
            text-align: center;
            padding: 50px 20px;
            background: #fff;
        }

        .contact-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Contact Details Section */
        .contact-details {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
            background: #e9ecef;
            padding: 40px 20px;
        }

        .contact-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 30%;
        }

        .contact-card i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .contact-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 0.9rem;
        }

        /* Contact Form Section */
        .contact-form {
            padding: 40px 20px;
            text-align: center;
            background: #fff;
        }

        .contact-form input, .contact-form textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .contact-form button {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #0056b3;
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

    <!-- Contact Section -->
    <section class="contact-section">
        <h1>Contact Us</h1>
        <p>
            Have any questions or need further information? Reach out to us through the following channels:
        </p>

        <!-- Contact Details -->
        <div class="contact-details">
            <div class="contact-card">
                <i class="fas fa-phone-alt"></i>
                <h3>Phone</h3>
                <p>+91 7036854849</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>pooja@gmail.com</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Hyderabad</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h2>Send Us a Message</h2>
        <form action="send_message.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> E-Leave Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
