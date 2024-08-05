<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <?php include("includes/header.php");?>
    </header>
    <main>
        <section class="hero">
            <video autoplay muted loop class="hero-video">
                <source src="images/videoplayback.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">
                <h1>Bright Signs: Spotlight on Video Art</h1>
                <p>Discover works by leading contemporary artists.</p>
                <a href="#link-redirect" class="btn">See the Exhibition</a>
            </div>
        </section>
        <section class="exhibitions" id="link-redirect">
            <div class="container">
                <div class="exhibition-item">
                    <img src="images/home-page/image1.jpg" alt="KAWS: FAMILY">
                    <div class="exhibition-info">
                        <h2>KAWS: FAMILY</h2>
                        <p>Until August 8, 2024</p>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/home-page/image2.jpg" alt="Moments in Modernism">
                    <div class="exhibition-info">
                        <h2>Moments in Modernism</h2>
                        <p>Until September 1, 2025</p>
                    </div>
                </div>
                <div class="exhibition-item">
                    <img src="images/home-page/image3.jpg" alt="Jinny Yu: at once">
                    <div class="exhibition-info">
                        <h2>Jinny Yu: at once</h2>
                        <p>Until January 7, 2025</p>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/home-page/image4.jpg" alt="Painted Presence: Rembrandt and his Peers">
                    <div class="exhibition-info">
                        <h2>Painted Presence: Rembrandt and his Peers</h2>
                        <p>Until February 2, 2025</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="sc.js"></script>
</body>
</html>
