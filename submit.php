<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["fullName"] ?? ''));
    $email = htmlspecialchars(trim($_POST["email"] ?? ''));
    $comments = htmlspecialchars(trim($_POST["comments"] ?? ''));

    if (!empty($name) && !empty($email) && !empty($comments)) {
        // TODO: save data or send email here

        // Redirect to thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        // One or more fields are empty, display an error
        echo "<h2>Error: All fields are required.</h2>";
        echo "<p><a href='contact.html'>Go back to the form</a></p>";
    }
} else {
    // If accessed directly without POST
    echo "<h2>Error: Invalid request.</h2>";
}
?>
