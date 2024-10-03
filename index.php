<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Chat Application</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Basic modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px; /* Location of the box */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Welcome to Real-Time Chat Application!</h1>
    <p>Please choose an option below:</p>

    <button id="registerBtn">Register</button>
    <button id="loginBtn">Login</button>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeRegister">&times;</span>
            <h2>Register</h2>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
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
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script src="js/scripts.js"></script>
    <script>
        // Get the modals
        var registerModal = document.getElementById("registerModal");
        var loginModal = document.getElementById("loginModal");

        // Get the buttons that open the modals
        var registerBtn = document.getElementById("registerBtn");
        var loginBtn = document.getElementById("loginBtn");

        // Get the <span> elements that close the modals
        var closeRegister = document.getElementById("closeRegister");
        var closeLogin = document.getElementById("closeLogin");

        // When the user clicks the button, open the modal
        registerBtn.onclick = function() {
            registerModal.style.display = "block";
        }
        loginBtn.onclick = function() {
            loginModal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeRegister.onclick = function() {
            registerModal.style.display = "none";
        }
        closeLogin.onclick = function() {
            loginModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == registerModal) {
                registerModal.style.display = "none";
            }
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }
    </script>
</body>
</html>
