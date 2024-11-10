<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="sign-in-container">
        <h2>Sign In</h2>
        <form id="signInForm">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" required>
            </div>
            <button type="submit">Sign In</button>
        </form>
        
        <div class="social-login">
            <p>Or sign in with:</p>
            <button id="googleSignIn">Google</button>
            <button id="facebookSignIn">Facebook</button>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js"></script>
    <script src="app.js"></script>
</body>
</html>
