<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $regNo = $_POST["reg-no"];
    $name = $_POST["name"];
    $batch = $_POST["batch"];
    $email = $_POST["email"];

    // Create a message with the form data
    $message = "Student Registration Details:\n";
    $message .= "Registration Number: " . $regNo . "\n";
    $message .= "Student Name: " . $name . "\n";
    $message .= "Batch: " . $batch . "\n";
    $message .= "Email: " . $email;

    // Save the data to a text file (you can replace this with your desired action)
    $file = 'registration_data.txt';
    file_put_contents($file, $message, FILE_APPEND);

    // Redirect back to the form with a success message (optional)
    header("Location: index.html?success=1");
    exit();
}
?>
