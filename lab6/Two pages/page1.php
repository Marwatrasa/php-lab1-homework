<?php
// Start the session
session_start();

// Store data in session
$_SESSION['message'] = 'Hello I am Marwat Mohmand';
$_SESSION['visit_time'] = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1 - Session Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            background-color: #f5f5f5;
            border-radius: 5px;
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
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Page 1</h1>
    
    <div class="container">
        <p>We've stored some data in your session:</p>
        <ul>
            <li>Message: <?php echo $_SESSION['message']; ?></li>
            <li>Visit Time: <?php echo $_SESSION['visit_time']; ?></li>
        </ul>
    </div>
    
    <a href="page2.php">Go to Page 2</a>
</body>
</html>