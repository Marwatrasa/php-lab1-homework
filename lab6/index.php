<?php

// 1

session_start();


// this question show us which country we choosed and that page we will ahave








// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['country'])) {
    $_SESSION['user_country'] = $_POST['country'];
}

// Check if country is already set in session
$countrySet = isset($_SESSION['user_country']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Selection</title>
</head>
<body>
    <?php if (!$countrySet): ?>
        <h1>Please Select Your Country</h1>
        <form method="POST" action="index.php">
            <label for="country">Country:</label>
            <select name="country" id="country" required>
                <option value="">-- Select a country --</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
                <option value="Japan">Japan</option>
                <option value="Other">Other</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    <?php else: ?>
        <h1>Welcome!</h1>
        <p>Your selected country is: <?php echo htmlspecialchars($_SESSION['user_country']); ?></p>
        <p><a href="test.php">Go to Test Page</a></p>
    <?php endif; ?>


<!-- 5 -->


</body>
</html>











</body>
</html>