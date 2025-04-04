<?php
session_start();

// Check if country is set in session
if (!isset($_SESSION['user_country'])) {
    // Redirect back to index if country isn't set
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <h1>Test Page</h1>
    <p>Your country is: <?php echo htmlspecialchars($_SESSION['user_country']); ?></p>
    <p><a href="index.php">Go back to Home Page</a></p>
</body>
</html>