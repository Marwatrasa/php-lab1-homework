<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты get_headers()</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="header__logo">
            <img src="images/Screenshot 2025-02-14 225845.png" alt="Логотип МосПолитеха" class="header__logo-image">
        </div>
        <h1 class="header__title">Result you can see</h1>
    </header>
    

    <main>
        <div class="main__block_result">
        <h2 class="main__title_result">Result with header</h2>
        <textarea rows="20" cols="80"><?php 

            $headers = get_headers("https://httpbin.org/post");
            if ($headers) {
                foreach ($headers as $header) {
                    echo htmlspecialchars($header) . "\n"; 
                }
            } else {
                echo "did not get the work.";
            }

        ?></textarea>
        </div>

        <a href="home2.php" class="main__link">Go back to Feedback Form</a>
    </main>

    <footer>
        <p class="footer__descr_result"></p>
    </footer>
</body>
</html>