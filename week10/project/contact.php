<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Private Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Private Resume</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Contact</h2>
        <form action="process_contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Private Resume</p>
    </footer>
</body>

</html>