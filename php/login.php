<?php
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch the user from the database
    $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Start session and store user data
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            echo "Login successful. Welcome, $username!";
            // Redirect to chat page or user dashboard
            header('Location: chat.php');
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Username not found.";
    }
}
?>
