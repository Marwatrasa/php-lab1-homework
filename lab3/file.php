<?php

function convertEverySecondWord(&$words) {
    for ($i = 1; $i < count($words); $i += 2) {
        $words[$i] = strtoupper($words[$i]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    
    $inputText = $_POST['text'];
    $words = explode(' ', $inputText);

  
    convertEverySecondWord($words);
    $outputText = implode(' ', $words);
} else {
    $outputText = 'Please enter some text.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Every Second Word</title>
</head>
<body>
    <h1>Convert Every Second Word to Uppercase</h1>
    <form method="POST" action="">
        <label for="text">Enter your text:</label><br>
        <textarea name="text" id="text" rows="5" cols="50"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea><br><br>
        <input type="submit" value="Convert">
    </form>

    <h2>Result:</h2>
    <p><?php echo isset($outputText) ? htmlspecialchars($outputText) : ''; ?></p>
</body>
</html>