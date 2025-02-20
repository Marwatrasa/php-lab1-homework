<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello, World!</title>
  <link rel="stylesheet" href="homework.css">
</head>
<body>
<header>
        <div class = 'header__contanier'>
            <img class  = 'header__logo' src = 'images/Screenshot 2025-02-14 225845.png' alt = 'Логтоип МосПолитеха'>
            <h1 class = 'header__text'>Hello, world!</h1>   
        </div> 
    </header> 
    <main>
        <p class = 'main__text'>It looks cool: 
            <?php
            $numb = rand(1, 100);
            echo $numb?>
        </p>
        <?php
            $img = ["images/photo12.jpg", "images/photo13.jpg", "images/photo14.jpg", "images/photo15.jpg", "images/photo16.jpg"];
            $rand_img = $img[array_rand($img)];
            echo "<img class = 'main__img' src='images/Screenshot 2025-02-14 225606.png'width='250'>";
        ?>
    </main>
    <footer>
        <p class = 'footer__text'>Create a web page with dynamic content. Upload code to a remote repository.</p>
    </footer>

  <script src="homework.js"></script>
</body>
</html>