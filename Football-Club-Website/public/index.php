<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Homepage.css">
  <title>Homepage</title>
</head>
<body>
<!--Navgation Bar-->
<header>
  <nav class="navbar">
    <div class="logo">FC ESCUELA</div>
    <ul class="nav-links">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./About Us/AboutUs.blade.php">About Us</a></li>
      <li><a href="./Fixtures/fixtures.blade.php">Fixtures</a></li>
      <li><a href="./News/News.blade.php">News</a></li>
      <li><a href="./Contact Us/Contact.blade.php">Contact Us</a></li>
      <li><a href="./Gallery//Gallery.blade.php">Gallery</a></li>
    </ul>
    <button class="sign-in-btn" onclick="openSignIn()"><a href="#">Sign In</a></button>
  </nav>
</header>

<!--Hero Section-->
<section class="hero">
  <h1>Welcome to FC ESCUELA</h1>
  <p>Offical Website of FC ESCUELA</p>
  <button class="learn-more-btn">Learn More</button>
</section>

<!--Latest News Section-->
<section class="news">
  <h2>Latest News</h2>
  <div class="news-item">
    <h3>Match Recap: A Thrilling Win of FC ESCUELA</h3>
    <p>Last night's game ended with a victory for FC ESCUELA</p>
    <a href="#">Read More</a>
  </div>
    <div class="news-item">
      <h3>Match Recap:FC ESCUELA draw FC BAH</h3>
      <p>Last night's game ended with a draw for FC ESCUELA</p>
      <a href="#">Read More</a>
    </div>
</section>

<!--Upcoming Section-->
<section class="matches">
  <h2>Upcoming Matches</h2>
  <div class="match">
    <h3>FC ESCUELA vs FC 11A2 Ngoc Hoi</h3>
    <p><strong>Date:</strong>Sunday,November 10,2024</p>
    <p><strong>Location:</strong>Lac Thi Stadium</p>
    <p><strong>Time:</strong>3:00PM</p>
    <a href="#">Buy Tickets</a>
    
<section class="matches">
  <h3>FC ESCUELA vs FC 12D3 Ngoc Hoi</h3>
  <p><strong>Date:</strong>Sunday,November 17,2024</p>
  <p><strong>Location:</strong>Dong My Stadium</p>
  <p><strong>Time:</strong>4:00PM</p>
  <a href="#">Buy Tickets</a>
</section>
  </div>
</section>

<!--Team Section-->
<h2>Meet our team</h2>
<p>Our player are the heart of the club</p>
<ul>
  <li><strong>MinhD</strong>- Forward,Top</li>
  <li><strong>VietH</strong>- Midfielder,Right</li>
  <li><strong>Khanh</strong>- Midfielder,Left</li>
  <li><strong>Phong</strong>- Deference,Center</li>
</ul>
</section>
 <!-- Footer -->
 <footer>
        <p>&copy; 2024 FC ESCUELA. All rights reserved.</p>
    </footer>

    <script src="./JS/script.js"></script>
</body>
</html>