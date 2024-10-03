<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Chat Application</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Real-Time Chat App</h1>
        <p>Please log in to continue or register if you don't have an account.</p>
        <button id="loginBtn">Login</button>
        <button id="registerBtn">Register</button>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeRegister">&times;</span>
            <h2>Register</h2>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <input type="password" name="password" placeholder="confirm Password" required><br><br>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required> <br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
