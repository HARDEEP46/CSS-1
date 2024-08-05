<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Art Gallery Submission Form</title>
</head>
<body>
<header>
        <?php include("includes/header.php"); ?>
    </header>
    <!-- HTML -->
<div class="form-container">
    <form action="your-action-url" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <button type="submit">Submit</button>
    </form>
</div>

<?php include("includes/footer.php") ?>


</body>
</html>
