<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join & Support - Art Gallery</title>
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
                <source src="images/join-support/join-banner.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">
                <h1>Join & Support</h1>
                <p>Become a member or support our gallery.</p>
                <a href="#join-support" class="btn">Learn More</a>
            </div>
        </section>
        <section id="join-support" class="exhibitions">
            <div class="container">
                <div class="exhibition-item">
                    <img src="images/join-support/join1.jpg" alt="Membership">
                    <div class="exhibition-info">
                        <h2>Membership</h2>
                        <p>Enjoy exclusive benefits as a member.</p>
                        <a href="#" class="btn">Join Now</a>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/join-support/join2.jpg" alt="Donations">
                    <div class="exhibition-info">
                        <h2>Donations</h2>
                        <p>Support the gallery with your donations.</p>
                        <a href="#" class="btn">Donate Now</a>
                    </div>
                </div>
                <div class="exhibition-item">
                    <img src="images/join-support/join3.jpg" alt="Volunteer">
                    <div class="exhibition-info">
                        <h2>Volunteer</h2>
                        <p>Give your time and skills to support us.</p>
                        <a href="#" class="btn">Volunteer Now</a>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/join-support/join4.jpg" alt="Sponsorship">
                    <div class="exhibition-info">
                        <h2>Sponsorship</h2>
                        <p>Partner with us to make a difference.</p>
                        <a href="#" class="btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="sc.js"></script>
</body>
</html>
