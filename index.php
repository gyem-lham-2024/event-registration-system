<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Online Event Registration</title>
</head>
<body>
    <header>
        <h1>Welcome to the Online Event Registration System</h1>
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

    <div class="slider">
		<div class="slides">
			<div class="slide">
				<img src="images/event1.jpg" alt="Event 1">
				<div class="slide-text">
					<h2>Sydney Festival</h2>
					<p>Celebrating art, culture, and community with performances and exhibitions across the city.</p>
				</div>
			</div>
			<div class="slide">
				<img src="images/event2.jpg" alt="Event 2">
				<div class="slide-text">
					<h2>Melbourne Cup</h2>
					<p>Australia's most prestigious horse race, held annually on the first Tuesday of November.</p>
				</div>
			</div>
			<div class="slide">
				<img src="images/event3.jpg" alt="Event 3">
				<div class="slide-text">
					<h2>Vivid Sydney</h2>
					<p>An annual festival of light, music, and ideas featuring spectacular light installations.</p>
				</div>
			</div>
			<div class="slide">
				<img src="images/event4.jpg" alt="Event 4">
				<div class="slide-text">
					<h2>Woodford Folk Festival</h2>
					<p>A week-long celebration of music, arts, and culture held in Queensland every year.</p>
				</div>
			</div>
			<div class="slide">
				<img src="images/event5.jpg" alt="Event 5">
				<div class="slide-text">
					<h2>Dark Mofo</h2>
					<p>A winter festival in Tasmania celebrating the dark through large-scale art, food, and music.</p>
				</div>
			</div>
		</div>
		<div class="slider-controls">
			<span class="prev" onclick="moveSlide(-1)">&#10094;</span>
			<span class="next" onclick="moveSlide(1)">&#10095;</span>
		</div>
	</div>



    <div class="content">
        <h2>Upcoming Events</h2>
        <p>Join us for exciting events happening near you!</p><br>
        <a href="events.php" class="button">View All Events</a>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Event Registration</p>
    </footer>

    <script src="js/script.js"></script> <!-- Link to the JS file -->
</body>
</html>
