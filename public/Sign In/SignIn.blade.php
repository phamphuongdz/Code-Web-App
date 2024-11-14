<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
    <!--Link Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link GG font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Barlow+Condensed:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <title>Sign In</title>
</head>
<body>
    <div class="bg">
        <div class="main">
            <h1>Sign In</h1>
            <form>
                <label for="first">Username:</label>
                <input type="text" id="first" name="first" placeholder="Enter your name" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <div class="wrap">
                    <a class="btn" href="../index.php">
                        <button type="sumbit">Login</button>
                    </a>
                </div>
                <span style="font-size : small">Or:</span>
                <a href="https://www.facebook.com/?locale=vi_VN"><i class="fa-brands fa-facebook fa-xl" style="color: rgb(35, 35, 35)" title="Facebook"></i></a>
                <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-xl" style="color: rgb(35,35,35)" title="Twitter"></i></a>
                <a href="https://accounts.google.com/"><i class="fa-brands fa-google fa-xl" style="color: rgb(35, 35, 35)" title="Google"></i></a>
            </form>
            <div>
                <div class="g-recaptcha" data-sitekey="6LcBun4qAAAAAEy9Jae_d2mw16U5lwh4CGweZgYK"></div>
            </div>
            <p>
                Not Registered?
                <a href="../Sign Up/signup.blade.php" style="color: rgb(35, 35, 35)">Create an account!</a>
            </p>
            <p>
                Forgot Password?
                <a href="../Forgot Password/forgotpassword.blade.php" style="color: rgb(35,35,35)">Forgot Password</a>
            </p>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>