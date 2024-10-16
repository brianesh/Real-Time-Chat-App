<?php
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password === $confirmPassword) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $checkUserQuery = $mysqli->prepare("SELECT id FROM users WHERE username = ?");
        $checkUserQuery->bind_param('s', $username);
        $checkUserQuery->execute();
        $checkUserQuery->store_result();

        if ($checkUserQuery->num_rows > 0) {
            echo "Username already exists. Please choose another one.";
        } else {
            $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param('ss', $username, $hashedPassword);

            if ($stmt->execute()) {
                echo "Registration successful. You can now login.";
            } else {
                echo "Registration failed. Please try again.";
            }
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>
