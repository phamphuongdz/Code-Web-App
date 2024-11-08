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

   <!-- Hero Section -->
     <section class="hero">
         <h1>Welcome to FC ESCUELA</h1>
         <button class="learn-more-btn" onclick="toggleModal()">Learn More</button>
     </section>

     <!-- News Section -->
     <section class="news">
         <h2>Latest News</h2>
         <div class="news-item">
             <h3>FC ESCUELA lose FC 98</h3>
             <p>FC ESCUELA lose FC 1998 in the match before Tet Holiday</p>
             <a href="#">Read more</a>
         </div>
         <!-- More news items -->
     </section>

     <!-- Matches Section -->
     <section class="matches">
         <h2>Upcoming Matches</h2>
         <div class="match">
             <h3>Match 1</h3>
             <p>FC ESCUELA vs FC 1998</p>
         </div>
         <!-- More matches -->
     </section>

     <!-- Team Section -->
     <section class="team">
         <h2>Our Team</h2>
         <ul>
             <li>Player 1</li>
             <li>Player 2</li>
             <!-- More players -->
         </ul>
     </section>

     <!-- Footer -->
     <footer>
         <p>&copy; 2024 Football Club. All Rights Reserved.</p>
     </footer>

     <!-- Modal -->
     <div class="modal" id="modal">
         <div class="modal-content">
             <span class="close" onclick="toggleModal()">&times;</span>
             <h2>About Our Club</h2>
             <p>Welcome to the best club with the most passionate fans and talented players...</p>
         </div>
     </div>
  <section>
</body>
</html>
