<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Sign In</title>
</head>
<body>
    <div class="form-container">
        <h2>Sign In</h2>
        <form id="signInForm" action="./scripts/signin.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign In</button>

            <p>Or sign in with</p>
            <div class="social-buttons">
                <button onclick="socialSignIn('facebook')">Facebook</button>
                <button onclick="socialSignIn('google')">Google</button>
                <button onclick="socialSignIn('instagram')">Instagram</button>
            </div>
        </form>
    </div>
    <script src="./scripts/script.js"></script>
</body>
</html>