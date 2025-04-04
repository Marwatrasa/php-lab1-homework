<?php
// Start the session
session_start();

// Check if session data exists
if (!isset($_SESSION['message'])) {
    header('Location: page1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - Session Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            background-color: #e8f4fc;
            border-left: 5px solid #3498db;
            padding: 20px;
            margin-top: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <h1>Page 2</h1>
    
    <div class="container">
        <p>Here's the data retrieved from your session:</p>
        <ul>
            <li>Message: <?php echo htmlspecialchars($_SESSION['message']); ?></li>
            <li>Visit Time: <?php echo htmlspecialchars($_SESSION['visit_time']); ?></li>
            <li>Session ID: <?php echo session_id(); ?></li>
        </ul>
    </div>
    
    <a href="page1.php">Back to Page 1</a>
    
    <form method="post" action="clear_session.php" style="margin-top: 20px;">
        <button type="submit" style="padding: 8px 12px; background-color: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Clear Session
        </button>
    </form>
</body>
</html>