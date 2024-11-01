<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FC ESCUELA</title>
  <link rel="stylesheet" href="./css/Homepage.css">
</head>
<body>
  <!--Navbar-->
  <header class="navbar">
    <h1 class="logo">FC ESCUELA</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./About Us/AboutUs.blade.php">About Us</a></li>
        <li><a href="./Fixtures/fixtures.blade.php">Fixtures</a></li>
        <li><a href="./Contact Us/Contact.blade.php">Contact Us</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery</a></li>
      </ul>
    </nav>
  </header>

  <!--Hero Section-->
  <section id="home" class="hero-section">
    <div class="hero-content">
      <h2>Welcome to FC ESCUELA</h2>
      <p>Join us in supporting our team to victory!</p>
      <button onclick="learnMore()"><a href="#">Learn More</a></button>
    </div>
  </section>

  <!--News Section-->
  <section id="news" class="news-section">
    <h2>Latest News</h2>
    <div class="news-cards">
      <div class="card">
        <img src="./Img/HomePage/DSC_0010.jpg" alt="News 1">
        <h3>FC ESCUELA win FC 98</h3>
        <p>FC ESCUELA have won the FC 98 tournament, defeating their opponents 3-2 in the final.</p>
        <button><a href="#">Read More</a></button>
      </div>
      <div class="card">
        <img src="./Img/HomePage/snapedit_1730084318903.jpg" alt="New 2">
        <h3>FC ESCUELA draw with FC 11A2 Ngoc Hoi</h3>
        <p>FC ESCUELA have a draw match with FC 11A2 Ngoc Hoi with 1-1 score.</p>
        <button><a href="#">Read More</a></button>
      </div>
      <div class="card">
        <img src="./Img/HomePage/464812582_539719175474273_4469343083427598304_n.jpg" alt="News 3">
        <h3>FC ESCUELA have a lost match with 12A3 Ngoc Hoi with 3-2 score</h3>
        <p>FC ESCUELA have a lost match with 12A3 Ngoc Hoi</p>
        <button><a href="#">Read More</a></button>
      </div>
    </div>
  </section>
  <!--Team Section-->
  <section id="team" class="team-section">
    <h2>Our Team</h2>
    <div class="team-cards">
      <div class="card">
        <img src="./Img/Player/DWG00614.jpg" alt="Player 1">
        <h3>Player 1</h3>
        <p>Position: Goalkeeper</p>
      </div>
      <div class="card">
        <img src="./Img/Player/323710267_1454181644992492_5303137637488456783_n.jpg" alt="Player 2">
        <h3>Player 2</h3>
        <p>Position: Midfielder</p>
      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="footer">
    <p>&copy; 2024 FC ESCUELA.All Right Reserved</p>
  </footer>

  <script src="./JS/script.js"></script>
</body>
</html>