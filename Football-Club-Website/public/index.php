<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Football Zone</title>
    <link rel="icon" type="image/x-icon" href="path/to/football-icon.ico" />
    <link rel="stylesheet" href="./css/Main.css">
    <link rel="stylesheet" href="./css/Homepage.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="homePage">
      <!-- Header Section -->
      <section class="header">
        <nav>
          <div class="logo">
            <div class="image-logo">
              <p class="textLogo1">FOOTBALL</p>
              <img src="../images/football-logo.png" alt="Logo" />
            </div>
            <div class="textLogo2">ZONE</div>
          </div>
          <ul id="navBar">
            <li id="close-btn" onclick="closeNavBar()">&times;</li>
            <li class="link home"><a href="#">Home</a></li>
            <li class="link"><a href="#">Teams</a></li>
            <li class="link"><a href="#">Leagues</a></li>
            <li class="link"><a href="#">News</a></li>
            <li class="link"><a href="#">Fixtures</a></li>
            <li class="link"><a href="#">Standings</a></li>
            <li class="link"><a href="#">Contact Us</a></li>
          </ul>
          <div class="icons">
            <div id="glass">
              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
              <div id="showSearch">
                <input type="search" placeholder="search here..." />
              </div>
            </div>
            <i class="fas fa-bars fa-lg" id="menu-btn" onclick="openNavBar()"></i>
          </div>
        </nav>
      </section>

      <!-- Banner Section -->
      <section class="box-banner">
        <div class="image-banner"></div>
        <div class="text-btn-banner">
          <p class="text-header">FOOTBALL ZONE</p>
          <p>Your one-stop destination for all things football.</p>
          <button class="btn">
            <a href="#">Explore Now</a>
          </button>
        </div>
      </section>

      <!-- Main Content Section -->
      <div class="contents">
        <!-- Matches Section -->
        <section class="matches">
          <h2>| Latest Matches</h2>
          <p>Catch up on the latest action and results from around the world.</p>
          <ul class="menu_buttons">
            <li><span class="btn active" onclick="showItems('all')">All</span></li>
            <li><span class="btn" onclick="showItems('latest')">Latest</span></li>
            <li><span class="btn" onclick="showItems('highlights')">Highlights</span></li>
          </ul>
          <div class="matches-container"></div>
        </section>

        <!-- News and Updates Section -->
        <aside>
          <section class="latest-news">
            <h2 class="title">LATEST NEWS</h2>
            <div class="news">
              <div class="image">
                <img src="../images/latest-news1.jpg" alt="Latest News 1" />
              </div>
              <div class="title">Team A Clinches Victory Over Team B</div>
              <div class="text">An exciting match concluded with a close victory for Team A...</div>
              <div class="day">29.10.2024</div>
            </div>
          </section>
        </aside>
      </div>

      <!-- Footer Section -->
      <footer>
        <div class="box">
          <div class="part-1">
            <div class="socials">
              <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <p>&copy;Football Zone 2024. All rights reserved</p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
