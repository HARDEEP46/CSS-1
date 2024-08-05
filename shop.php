<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Art Gallery</title>
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
                <source src="images/shop-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">
                <h1>Gallery Shop</h1>
                <p>Find exclusive art pieces and merchandise.</p>
                <a href="#shop" class="btn">Start Shopping</a>
            </div>
        </section>
        <section id="shop" class="exhibitions">
            <div class="container">
                <div class="exhibition-item">
                    <img src="images/shopping-page/shop1.jpg" alt="Art Prints">
                    <div class="exhibition-info">
                        <h2>Art Prints</h2>
                        <p>High-quality prints of your favorite artworks.</p>
                        <a href="form.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/shopping-page/shop2.jpg" alt="Art Books">
                    <div class="exhibition-info">
                        <h2>Art Books</h2>
                        <p>Explore art through beautiful books.</p>
                        <a href="form.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="exhibition-item">
                    <img src="images/shopping-page/shop3.jpg" alt="Gallery Merchandise">
                    <div class="exhibition-info">
                        <h2>Gallery Merchandise</h2>
                        <p>Exclusive items to show your support.</p>
                        <a href="form.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/shopping-page/shop4.jpg" alt="Original Art">
                    <div class="exhibition-info">
                        <h2>Original Art</h2>
                        <p>Own a piece of original artwork.</p>
                        <a href="form.php" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="sc.js"></script>
</body>
</html>
