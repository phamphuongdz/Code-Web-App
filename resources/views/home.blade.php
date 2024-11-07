<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FC ESCUELA</title>
</head>
<body>
  <!--Navbar-->
  <header class="navbar">
    <h1 class="logo">FC ESCUELA</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./About Us/AboutUs.blade.php">About Us</a></li>
        <li><a href="#">Fixtures</a></li>
        <li><a href="#">Contact Us</a></li>
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

  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: Arial, Helvetica, sans-serif;
}

/*Navbar*/
.navbar{
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar ul{
  list-style: none;
  display: flex;
}

.navbar ul li{
  margin: 0 15px;
}

.navbar ul li a{
  color: #fff;
  text-decoration: none;
}

.navbar .logo{
  font-size: 24px;
  font-weight: bold;
}

/*Hero Section*/
.hero-section{
  background: url('../Img/HomePage/DSC_0010.jpg') center/cover no-repeat;
  color: #fff;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.hero-section h2{
  font-size: 36px;
  margin-bottom: 10px;
}

.hero-section p{
  font-size: 18px;
  margin-bottom: 20px;
}

.hero-section button{
  background-color: #ff0000;
  color: #fff;
  padding: 10px 20px;
  border:none;
  cursor: pointer;
}

/*News Section*/
.news-section{
  padding: 40px;
  text-align: center;
}

.news-section h2{
  margin-bottom: 20px;
}

.news-cards{
  display: flex;
  justify-content: center;
}

.news-cards .card{
  width: 200px;
  margin: 0 10px;
  padding: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.news-cards .card img{
  width: 100%;
  height: 150px;
  object-fit: cover;
}

.news-cards .card h3{
  margin-top: 10px;
}
/*Button Section*/
.hero-section button {
  background-color: #ff0000;
  color: #fff;
  padding: 12px 24px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Hover Effect */
.hero-section button:hover {
  background-color: #cc0000;
  transform: scale(1.05);
}

/* Focus Effect */
.hero-section button:focus {
  outline: 2px solid #ffaaaa;
  outline-offset: 4px;
}

/* Team Section */
.team-section {
  padding: 40px;
  text-align: center;
  background-color: #f4f4f4;
}
.team-section h2 {
  margin-bottom: 20px;
}
.team-cards {
  display: flex;
  justify-content: center;
}
.team-cards .card {
  width: 200px;
  margin: 0 10px;
  padding: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.team-cards .card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
}

/* Footer */
.footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 15px;
}
  </style>
  <script>
    function learnMore() {
    alert("Explore more about our club and upcoming events!");
}

  </script>
  <script src="./JS/script.js"></script>
</body>
</html>