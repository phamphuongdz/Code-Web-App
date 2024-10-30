<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Homepage.css">
    <title>FC ESCUELA Offical Website</title>
<!--Bootstrap-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" rel="stylesheet">
<link href="./css/Homepage.css" rel="stylesheet">
</head>
<body>
<!--Nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="./Img/HomePage/Logo.jpg">FC ESCUELA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="#">News</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Libary</a></li>
        </ul>
    </div>
</nav>

<!--Hero Banner-->
<section class="hero text-center text-white d-flex justify-content-center align-items-center">
    <div>
        <h1>Welcome to FC ESCUELA</h1>
        <p>Your Home for All Club News and Updates</p>
        <a href="#" class="btn btn-primary">Learn More</a>
        <a href="#" class="btn btn-primary">Schedule</a>
    </div>
</section>

<!--News & Updates-->
<section class="container mt-5">
    <h2 class="text-center">Latest News</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="./Img/HomePage/DSC_0010.jpg" class="card-img-top" alt="Feature News">
                <div class="card-body">
                    <h5 class="card-title">Tet Holiday Recap</h5>
                    <p class="card-text">Tet Holiday Recap Match</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <!--Add news item here-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Upcoming Matches-->
<section class="container mt-5">
    <h2 class="text-center">Upcoming Matches</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Next Match</h5>
                    <p class="card-text">Opponent:12A3 Ngoc Hoi</p>
                    <p>Date: [Date]</p>
                    <p>Location: [Stadium]</p>
                </div>
            </div>
        </div>
        <!--Repeat-->
    </div>
</section>

<!-- Player Spotlight -->
<section class="container mt-5">
        <h2 class="text-center">Player Spotlight</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <img src="player.jpg" class="card-img-top" alt="Player Image">
                    <div class="card-body">
                        <h5 class="card-title">Player Name</h5>
                        <p class="card-text">Player Position</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for other players -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 p-4 text-center">
        <p>&copy; [Current Year] [Club Name]. All Rights Reserved.</p>
        <div>
            <a href="#" class="text-white">Facebook</a> |
            <a href="#" class="text-white">Twitter</a> |
            <a href="#" class="text-white">Instagram</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>