<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $guests = htmlspecialchars($_POST['guests']);
    $message = htmlspecialchars($_POST['message']);
    
    // Here you can process the data, e.g., save it to a database or send an email
    // For demonstration, we'll just display the data
    echo "<h1>RSVP Confirmation</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Number of Guests: $guests</p>";
    echo "<p>Message: $message</p>";
}
?>
