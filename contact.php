<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Contact Us - Online Event Registration</title>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">View Events</a></li>
                <li><a href="register.php">Register for an Event</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>If you have any questions, feel free to reach out!</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> 123 Event Street, City, Country</li>
                <li><i class="fas fa-phone"></i> +123 456 7890</li>
                <li><i class="fas fa-envelope"></i> info@eventregistration.com</li>
            </ul>
        </div>

        <div class="contact-form">
            <h2>Contact Form</h2>
            <form action="submit_contact.php" method="POST">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="4" required></textarea>

				<button type="submit">Send Message</button>
			</form>

        </div>
    </div>

    <div class="map-container">
        <h2>Our Location</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0635361759155!2d144.95605431588384!3d-37.81627967975102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0aef9f9b%3A0x5045675218ced30!2sEvent%20Registration%20Office!5e0!3m2!1sen!2sau!4v1614740596789!5m2!1sen!2sau"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"></iframe>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Event Registration</p>
    </footer>
</body>
</html>
