<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshhet" href="./style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form id="signupForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="sumbit" class="signup-button">Sign Up</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>
</html>