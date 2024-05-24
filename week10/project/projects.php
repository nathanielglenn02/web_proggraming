<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Private Resume</title>
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
        <h2>Projects</h2>
        <p>Here are some of the projects I've worked on:</p>
        <ul>
            <?php
                $projects = ["Project A", "Project B", "Project C", "Project D", "Project E"];
                foreach ($projects as $project) {
                    echo "<li>$project</li>";
                }
            ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Private Resume</p>
    </footer>
</body>

</html>