<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS -->
    <title>Events - Online Event Registration</title>
</head>
<body>
    <header>
        <h1>Upcoming Events</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" id="event-search" placeholder="Search for events...">
    </div>

    <div class="event-container" id="event-list">
        <div class="event-card" data-event="sydney festival art culture">
            <img src="images/event1.jpg" alt="Event 1">
            <h2>Sydney Festival</h2>
            <p>Join us for a spectacular celebration of art and culture in Sydney.</p>
            <a href="register.php?event=sydneyfestival" class="button">Register Now</a>
        </div>

        <div class="event-card" data-event="melbourne cup sports race horse">
            <img src="images/event2.jpg" alt="Event 2">
            <h2>Melbourne Cup</h2>
            <p>The most prestigious horse race in Australia. Don't miss out!</p>
            <a href="register.php?event=melbournecup" class="button">Register Now</a>
        </div>

        <div class="event-card" data-event="vivid sydney light music festival">
            <img src="images/event3.jpg" alt="Event 3">
            <h2>Vivid Sydney</h2>
            <p>Experience a night of light and music during Sydney's famous festival.</p>
            <a href="register.php?event=vividsydney" class="button">Register Now</a>
        </div>

        <div class="event-card" data-event="woodford folk music festival">
            <img src="images/event4.jpg" alt="Event 4">
            <h2>Woodford Folk Festival</h2>
            <p>A grand folk music and arts festival held annually in Queensland.</p>
            <a href="register.php?event=woodfordfolk" class="button">Register Now</a>
        </div>

        <div class="event-card" data-event="dark mofo art food winter festival">
            <img src="images/event5.jpg" alt="Event 5">
            <h2>Dark Mofo</h2>
            <p>Celebrate Tasmania's dark winter festival with art, food, and music.</p>
            <a href="register.php?event=darkmofo" class="button">Register Now</a>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Event Registration</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
