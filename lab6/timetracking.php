<?php

// 5 Question

session_start();


// this question show us how many times we enter t=our site 



// Check if this is the first visit
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}

// Calculate seconds since first visit
$currentTime = time();
$secondsSinceVisit = $currentTime - $_SESSION['first_visit_time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Time Tracker</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .time-display {
            font-size: 24px;
            color: #3498db;
            margin: 25px 0;
            padding: 20px;
            background-color: #e8f4fc;
            border-radius: 5px;
        }
        .refresh-btn {
            display: inline-block;
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 10px 20px;
            border: 1px solid #3498db;
            border-radius: 5px;
            transition: all 0.3s;
            background: none;
            cursor: pointer;
            font-size: 16px;
        }
        .refresh-btn:hover {
            color: white;
            background-color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Visit Time Tracker</h1>
        
        <div class="time-display">
            <?php if ($secondsSinceVisit === 0): ?>
                You just entered the site now!
            <?php else: ?>
                You entered the site <strong><?php echo $secondsSinceVisit; ?></strong> seconds ago
            <?php endif; ?>
        </div>
        
        <button class="refresh-btn" onclick="window.location.reload()">Refresh Page</button>
        
        <?php if (isset($_SESSION['first_visit_time'])): ?>
            <p style="margin-top: 20px; color: #7f8c8d;">
                First visit timestamp: <?php echo date('Y-m-d H:i:s', $_SESSION['first_visit_time']); ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>