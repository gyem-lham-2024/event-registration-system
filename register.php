<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS -->
    <title>Event Registration - Online Event Registration</title>
</head>
<body>
    <header>
        <h1>Event Registration</h1>
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

    <div class="registration-form">
        <h2>Register for an Event</h2>

        <?php
        // Include the database configuration file
        include 'db_config.php';

        // Initialize variables to store form data and error messages
        $nameErr = $emailErr = $eventErr = "";
        $name = $email = $event = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            } else {
                $email = test_input($_POST["email"]);
            }

            // Validate event
            if (empty($_POST["event"])) {
                $eventErr = "Please select an event";
            } else {
                $event = test_input($_POST["event"]);
            }

            // If no errors, insert data into the database
            if (empty($nameErr) && empty($emailErr) && empty($eventErr)) {
                $sql = "INSERT INTO registrations (name, email, event) VALUES ('$name', '$email', '$event')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Thank you, $name, for registering for $event. We will send a confirmation email to $email.</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            }
        }

        // Helper function to sanitize inputs
        function test_input($data) {
            return htmlspecialchars(stripslashes(trim($data)));
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Name Input -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span><br><br>

            <!-- Email Input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span><br><br>

            <!-- Event Dropdown -->
            <label for="event">Select Event:</label>
            <select id="event" name="event">
                <option value="">-- Select an Event --</option>
                <option value="Sydney Festival" <?php if ($event == "Sydney Festival") echo "selected"; ?>>Sydney Festival</option>
                <option value="Melbourne Cup" <?php if ($event == "Melbourne Cup") echo "selected"; ?>>Melbourne Cup</option>
                <option value="Vivid Sydney" <?php if ($event == "Vivid Sydney") echo "selected"; ?>>Vivid Sydney</option>
                <option value="Woodford Folk Festival" <?php if ($event == "Woodford Folk Festival") echo "selected"; ?>>Woodford Folk Festival</option>
                <option value="Dark Mofo" <?php if ($event == "Dark Mofo") echo "selected"; ?>>Dark Mofo</option>
            </select>
            <span class="error"><?php echo $eventErr; ?></span><br><br>

            <!-- Submit Button -->
            <input type="submit" value="Register">
        </form>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Event Registration</p>
    </footer>

</body>
</html>
