<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>About Us - Online Event Registration</title>
</head>
<body>
    <header>
        <h1>About Us</h1>
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

    <div class="about-container">
        <div class="about-text">
            <h2>Our Mission</h2>
            <p>Connecting people with exciting events in their community and providing a seamless registration experience.</p>

            <h2>Our Vision</h2>
            <p>To be the leading platform for event registration, making it easy for individuals to participate in local happenings.</p>

            <h2>Our Values</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Integrity: Honesty and transparency.</li>
                <li><i class="fas fa-check-circle"></i> Community: Enriching lives through events.</li>
                <li><i class="fas fa-check-circle"></i> Innovation: Continuously improving our platform.</li>
            </ul>
        </div>

        <div class="about-image">
            <img src="images/about-us.jpg" alt="About Us">
        </div>
    </div>

    <h2>Meet the Team</h2>
    <div class="team">
        <div class="team-member">
            <h3>John Doe</h3>
            <p>Founder & CEO</p>
            <i class="fas fa-user-circle fa-3x"></i>
        </div>
        <div class="team-member">
            <h3>Jane Smith</h3>
            <p>Marketing Director</p>
            <i class="fas fa-user-circle fa-3x"></i>
        </div>
        <div class="team-member">
            <h3>Mike Johnson</h3>
            <p>Event Coordinator</p>
            <i class="fas fa-user-circle fa-3x"></i>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Event Registration</p>
    </footer>
</body>
</html>
