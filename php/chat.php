<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="chat-container">
        <h1>Welcome to the Chat, <?php echo $_SESSION['username']; ?>!</h1>
        
        <div class="chat-box">
            <p>User1: Hello!</p>
            <p>User2: Hi there!</p>
        </div>
        
        <form id="chatForm" method="POST">
    <input type="text" id="messageInput" name="message" placeholder="Type your message..." required>
    <button type="submit">Send</button>
</form>

    </div>
</body>
</html>
