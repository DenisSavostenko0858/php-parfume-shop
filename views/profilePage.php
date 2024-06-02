<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="../public/adaptive.css">
</head>
<body>
    <?php include'./partials/headerUser.php' ?> 
    <div class="after-header"><div class="logotip">Профиль</div></div>
    <div class="background-image-othet-page">
            <img class="background-image-back" src="../public/images/background.png" alt="фон">
    </div>
    <div class="main-content">
            <h3 class="bacground-text">Molecule <span class="white">----</span> parfume</h3>
    </div>   
    <div class="content-cart">
        <h2>Корзина</h2>
        <div class="message-profile">
        <p>К сожалению на данный момент онлайн касса не работает :(</p>
        <p>По всем вашим заказам с вами свяжется оператор</p>
        <p>Просим прощения за предоставленые не удобства</p>
        </div>
        <div class="content-cart-db">
        <?php include'../controllers/cartlistuser.php' ?>
        </div>
    </div>
    <?php include'./partials/bottom.php' ?>       
</body>
</html>