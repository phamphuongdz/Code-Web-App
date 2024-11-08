<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Homepage.css">
  <title>Homepage</title>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar">
    <h1>FC ESCUELA</h1>
    <ul class="nav-links">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./About Us/AboutUs.blade.php">About Us</a></li>
      <li><a href="./Fixtures/fixtures.blade.php">Fixtures</a></li>
      <li><a href="./News/News.blade.php">News</a></li>
      <li><a href="./Contact Us/Contact.blade.php">Contact Us</a></li>
      <li><a href="./Gallery/Gallery.blade.php">Gallery</a></li>
    </ul>
    <button class="sign-in-btn">Sign In</button>
  </nav>

  <!--Hero Section-->
  <section class = "hero">
      <div class="hero-content">
          <h1>Welcome to FC ESCUELA's Offical Website</h1>
          <p>Experience the Passion of Football With Us</p>
          <button onclick="scrollToSection('about')">Discover More</button>
          </div>
      </section>
   <!--About Section-->
   <section id = "about" class="about-section">
       <h2>About Us</h2>
       <p>FC ESCUELA is dedicated to excellence on the field and inspring fans</p>
       </section>
   <!--Team Section-->
   <section id="team" class="team-section">
       <h2>Meet Our Team</h2>
       <div class = "team-gallery">
           <div class = "team-member">
               <img src = "#" alt="Player 1">
               <p>Player 1</p>
               </div>
           <div class="team-member">
               <img src="#" alt="Player 2">
               <p>Player 2</p>
       </section>
   <!--Match Section-->
   <section id="matches" class="matches-section">
       <h2>Upcoming Matches</h2>
       <ul>
           <li><strong>Next Match</strong>FC ESCUELA vs FC 11D</li>
           <li>FC ESCUELA vs FC 1998</li>
           </ul>
        <!-- Footer -->
         <footer>
           <p>&copy; 2024 [Team Name]. All rights reserved.</p>
           <p>Follow us on:
             <a href="#">Facebook</a> |
             <a href="#">Twitter</a> |
             <a href="#">Instagram</a>
           </p>
         </footer>

</body>
</html>
