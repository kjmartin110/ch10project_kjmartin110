
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building a Dynamic Form with PHP</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <h1>Building a Dynamic Form with PHP</h1>
    <p>Name: Kevin Martin</p>
    <p>Date: <?php echo date("F j, Y"); ?></p>

    <!-- Form collects user information and sends it to confirm.php -->
    <form action="confirm.php" method="POST">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">

    </form>

</body>
</html>
