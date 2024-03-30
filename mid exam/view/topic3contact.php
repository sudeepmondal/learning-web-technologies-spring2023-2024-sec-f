<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | AB </title>
</head>
<body>
    <header>
        <h1>Contact</h1>
        <nav>
            <ul>
                <li><a href="topic3index.php">Home</a></li>
                <li><a href="topic3about.php">About Me</a></li>
                <li><a href="topic3portfolio.php">Portfolio</a></li>
                <li><a href="topic3photo_album.php">Photo Album</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="send_message.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Send Message">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 AB. All rights reserved.</p>
    </footer>
</body>
</html>
