
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <h1>Building a Dynamic Form with PHP</h1>
    <p>Name: Kevin Martin</p>
    <p>Date: <?php echo date("F j, Y"); ?></p>

    <?php
    // Check if the form was submitted using POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Store the submitted values and remove extra spaces
        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $message = trim($_POST["message"] ?? "");

        // Sanitize the email address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate the form fields
        if (empty($name) || empty($email) || empty($message)) {
            $output = "Please fill out all fields.";
            $class = "error";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $output = "Please enter a valid email address.";
            $class = "error";
        } else {
            // Create a success message
            $output = "Your form was submitted successfully!";
            $class = "success";
        }

        // Display the confirmation or error message
        echo "<div class='$class'>$output</div>";

        // Display submitted information if valid
        if ($class == "success") {
            echo "<p>Name: " . htmlspecialchars($name) . "</p>";
            echo "<p>Email: " . htmlspecialchars($email) . "</p>";
            echo "<p>Message: " . nl2br(htmlspecialchars($message)) . "</p>";
        }

    } else {
        // Handle visitors who did not submit the form
        echo "<div class='error'>No form was submitted.</div>";
    }
    ?>

</body>
</html>
