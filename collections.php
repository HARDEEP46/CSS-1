<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections - Art Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <?php include("includes/header.php"); ?>
    </header>
    <main>
        <section class="hero">
        <video autoplay muted loop class="hero-video">
                <source src="images/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">
                <h1>Our Collections</h1>
                <p>Explore our diverse range of collections.</p>
                <a href="#collections" class="btn">View Collections</a>
            </div>
        </section>
        <section id="collections" class="exhibitions">
            <div class="container">
                <div class="exhibition-item">
                    <img src="images/collections-page/collection1.jpg" alt="Modern Art Collection">
                    <div class="exhibition-info">
                        <h2>Modern Art Collection</h2>
                        <p>A celebration of contemporary works.</p>
                        <a href="https://ago.ca/collection/browse?collection[1746]=1746" class="btn">Learn More</a>

                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/collections-page/collection2.jpg" alt="Renaissance Art">
                    <div class="exhibition-info">
                        <h2>Renaissance Art</h2>
                        <p>Masterpieces from the Renaissance period.</p>
                        <a href="https://ago.ca/collection/browse?collection[1746]=1746" class="btn">Learn More</a>

                    </div>
                </div>
                <div class="exhibition-item">
                    <img src="images/collections-page/collection3.jpg" alt="Impressionism">
                    <div class="exhibition-info">
                        <h2>Impressionism</h2>
                        <p>The art of light and color.</p>
                        <a href="https://ago.ca/collection/browse?collection[1746]=1746" class="btn">Learn More</a>

                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/collections-page/collection4.jpg" alt="Abstract Art">
                    <div class="exhibition-info">
                        <h2>Abstract Art</h2>
                        <p>Exploring shapes and forms.</p>
                        <a href="https://ago.ca/collection/browse?collection[1746]=1746" class="btn">Learn More</a>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="sc.js"></script>
</body>
</html>
