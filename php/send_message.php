<?php
session_start();
require 'db.php'; // Include database connection

if (isset($_POST['message']) && !empty($_POST['message'])) {
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id']; // Get the logged-in user's ID

    // Insert the message into the database
    $stmt = $mysqli->prepare("INSERT INTO messages (user_id, message) VALUES (?, ?)");
    $stmt->bind_param('is', $user_id, $message);

    if ($stmt->execute()) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
}
?>
