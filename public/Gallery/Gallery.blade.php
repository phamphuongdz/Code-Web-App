<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Gallery</title>
</head>
<body>
    <header>
        <h1>FC ESCUELA Gallery</h1>
    </header>

    <section class="gallery">
        <!--Gallery images here -->
        <div class="gallery-item">
            <img src="./Image/DSC_0012.jpg" alt="Picture 1">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0002.jpg" alt="Picture 2">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0006.jpg" alt="Picture 3">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0008.jpg" alt="Picture 4">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0007.jpg" alt="Picture 5">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0009.jpg" alt="Picture 6">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0011.jpg" alt="Picture 7">
        </div>
        <div class="gallery-item">
            <img src="./Image/DSC_0010.jpg" alt="Picture 8">
        </div>
    </section>
    <!--LightBox Modal-->
    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-image" id="lightboxImage">
    </div>

    <script src="./script.js"></script>
</body>
</html>