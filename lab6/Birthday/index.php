<?php

session_start();



// in this question we want know how many days left for your $birthday


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['birthday'])) {
    // Store birthday in a cookie that expires in 1 year
    setcookie('user_birthday', $_POST['birthday'], time() + (86400 * 365), '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Initialize variables
$message = '';
$daysLeft = null;
$isBirthday = false;

// Check if birthday cookie exists
if (isset($_COOKIE['user_birthday'])) {
    $birthday = $_COOKIE['user_birthday'];
    $today = new DateTime();
    $birthdayDate = new DateTime($birthday);
    
    // Create a DateTime for birthday this year
    $nextBirthday = new DateTime(date('Y') . '-' . $birthdayDate->format('m-d'));
    
    // If birthday already passed this year, set for next year
    if ($today > $nextBirthday) {
        $nextBirthday->modify('+1 year');
    }
    
    // Calculate difference
    $interval = $today->diff($nextBirthday);
    $daysLeft = $interval->days;
    
    // Check if today is birthday
    if ($daysLeft === 0) {
        $isBirthday = true;
        $message = "🎉 Happy Birthday! 🎉";
    } else {
        $message = "Your birthday is in $daysLeft days!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Countdown</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .birthday-message {
            font-size: 24px;
            margin: 20px 0;
            padding: 20px;
            border-radius: 5px;
            background-color: <?php echo $isBirthday ? '#ffeb3b' : '#e3f2fd'; ?>;
        }
        form {
            margin-top: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="date"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .reset-btn {
            background-color: #f44336;
            margin-top: 30px;
        }
        .reset-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Birthday Countdown</h1>
        
        <?php if (isset($_COOKIE['user_birthday'])): ?>
            <div class="birthday-message">
                <?php echo $message; ?>
            </div>
            <p>Your birthday: <?php echo date('F j', strtotime($_COOKIE['user_birthday'])); ?></p>
            
            <form method="post" action="reset.php">
                <button type="submit" class="reset-btn">Reset Birthday</button>
            </form>
            
        <?php else: ?>
            <p>Tell us your birthday and we'll show you how many days are left!</p>
            
            <form method="POST">
                <label for="birthday">Your Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>
                <button type="submit">Save Birthday</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>