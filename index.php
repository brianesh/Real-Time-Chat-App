<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS file -->
    <script src="js/script.js" defer></script> <!-- Link to your JavaScript file -->
    <title>Chat App</title>
</head>
<body>
    <div class="modal-container">
        <!-- Main Content (Welcome screen) -->
        <div class="modal-content-main">
            <h1>Welcome to Real-Time Chat App</h1>
            <button id="loginBtn">Login</button>
            <button id="registerBtn">Register</button>
        </div>

        <!-- Login Modal -->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeLogin">&times;</span>
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="loginUsername">Username:</label>
                        <input type="text" id="loginUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password:</label>
                        <input type="password" id="loginPassword" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>

        <!-- Register Modal -->
        <div id="registerModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeRegister">&times;</span>
                <h2>Register</h2>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" id="registerUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password:</label>
                        <input type="password" id="registerPassword" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" name="confirm_password" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
