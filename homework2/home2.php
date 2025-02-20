<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="home2.css">
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <img src="images/Screenshot 2025-02-14 225845.png" alt="Логотип МосПолитеха" class="header__logo-image">
        </div>
        <h1 class="header__title">Feedback Form</h1>
    </header>

    <main class="main">
        <form class="form" action="https://httpbin.org/post" method="POST">
            <div class="form__group">
                <label for="username" class="form__label">Name:</label>
                <input type="text" id="username" name="username" class="form__input" required>
            </div>

            <div class="form__group">
                <label for="email" class="form__label">E-mail:</label>
                <input type="email" id="email" name="email" class="form__input" required>
            </div>

            <div class="form__group">
                <label for="type" class="form__label">Apply:</label>
                <select id="type" name="type" class="form__select" required>
                    <option value="Amazon">Amazon</option>
                    <option value="Apple">Apple</option>
                    <option value="Zara">Zara</option>
                    <option value="Microsoft">Microsoft</option>
                </select>
            </div>

            <div class="form__group">
                <label for="message" class="form__label">Comment</label>
                <textarea id="message" name="message" class="form__textarea" rows="5" required></textarea>
            </div>

            <div class="form__group">
                <p class="form__label">recive message</p>
                <label class="form__checkbox-label">
                    <input type="checkbox" name="response_sms" value="sms" class="form__checkbox"> SMS
                </label>
                <label class="form__checkbox-label">
                    <input type="checkbox" name="response_email" value="email" class="form__checkbox"> E-mail
                </label>
            </div>

            <button type="submit" class="form__button">Send</button>
        </form>

        <a href="nextPage.php" class="main__link">Looking for the best emply</a>
    </main>

    <footer class="footer">
        <p class="footer__text">Looking for the best empoly</p>
    </footer>
</body>
</html>