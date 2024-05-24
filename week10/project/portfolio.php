<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Private Resume</title>
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
        <h2>Portfolio</h2>
        <p>Here are some of the projects I've worked on:</p>
        <ul>
            <?php
                $projects = ["Project 1", "Project 2", "Project 3", "Project 4", "Project 5"];
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