<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfume</title>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <?php include'views/partials/headerUser.php' ?>
    <div class="after-header">
        <div class="after-header-text">
            <h3 class="header-text">Мы предоставляем парфюмерию <span class="sub-color">доступную каждому</span></h3>
            <h3 class="header-text">Погружение в мир <span class="sub-color"> ароматов</span> и нот парфюма</h3>
            <h3 class="header-text">Подберем <span class="sub-color">нужный</span> для вас парфюм</h3>
            <h3 class="header-text">Консультируем по всем вопросам</h3>
            <h3 class="header-text">Большой <span class="sub-color">ассортимент </span></h3>
        </div>
        <div class="after-header-image">
            <img class="header-image" src="./public/images/header-image-noborder.jpg" alt="бутылка:)">
        </div>
    </div>
    <div class="background-image">
            <img class="background-image-back" src="./public/images/background.png" alt="фон">
        </div>
        <div class="main-content">
            <h3 class="bacground-text">Molecule-parfume</h3>
        </div>
    <div class="container-body-main">
        <h3>Пафрюмы личного использования</h3>
        <div class="content-from-database">
            <div>Парфюм1</div>
            <div>Парфюм2</div>
            <div>Парфюм3</div>
        </div>
        <h3>Свечи</h3>
        <div class="content-from-database">
            <div>Свеча1</div>
            <div>Свеча2</div>
            <div>Свеча3</div>
        </div>
        <h3>Аромадиффузоры</h3>
        <div class="content-from-database">
            <div>Диффузор1</div>
            <div>Диффузор2</div>
            <div>Диффузор3</div>
        </div>
    </div>
    <?php include'views/partials/bottom.php' ?>
</body>
</html>