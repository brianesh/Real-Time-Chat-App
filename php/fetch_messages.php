<?php
require 'db.php'; 

$query = "SELECT messages.message, messages.created_at, users.username FROM messages 
          JOIN users ON messages.user_id = users.id ORDER BY messages.created_at ASC";
$result = $mysqli->query($query);

$messages = '';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages .= '<p><strong>' . htmlspecialchars($row['username']) . ':</strong> ' 
                     . htmlspecialchars($row['message']) . ' <span class="timestamp">'
                     . $row['created_at'] . '</span></p>';
    }
} else {
    $messages = '<p>No messages yet. Start the conversation!</p>';
}

echo $messages;
?