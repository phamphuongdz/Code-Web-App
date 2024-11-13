<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <form id="signin-form" action="signin.php" method="POST">
            <h2>Sign In</h2>

            <!--Social Media-->
            <div class="social-button">
                <button type="button" id="google-signin"><a href="">Sign In with Google</a></button>
                <button type="button" id="facebook-signin"><a href="">Sign In with Facebook</a></button>
            </div>

            <p>Or sign in with your email address</p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign In</button>
        </form>
    </div>
     <!-- Include JavaScript for OAuth functionality -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script src="./script.js"></script>
</body>
</html>