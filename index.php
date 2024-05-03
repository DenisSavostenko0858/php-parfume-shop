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
            <h3 class="bacground-text">Molecule <span class="white">----</span> parfume</h3>
    </div>
    <div class="container-body-main">
        <?php if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'true') { ?>
            <div class="container-body-main">
                <h3>Здравствуйте admin</h3>
                <li class="header-button"><a class="admin-button" href="/views/adminpanel.php">Перейдите в панель администратора</a></li> 
            </div>        
        <?php } ?>
        <h2>Пафрюмы личного использования</h2>
        <div class="content-from-database">
        <?php
            $db = new SQLite3('database/database.db');
            $stmt = $db->query('SELECT * FROM Products');

            while ($row = $stmt->fetchArray()) {
                echo "<div class='product-card'>";
                echo "<form action='../controllers/modalwindow.php' method='post' class='form-product-card'>";
                echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
                echo "<img class='card-photo' src='./public/images/haeder-image.png' alt='бутылка('>";
                echo "<div class='card-about'>";
                echo "<h3 class='product-name-card'>" . $row['name'] . "</h3>";
                echo "<p class='product-price-card'>Цена: " . $row['price'] . "</p>";
                echo "<input type='hidden' name='name' value='". $row['name'] ."'>";
                echo "<input type='hidden' name='description' value='". $row['description'] ."'>";
                echo "<input type='hidden' name='additional' value='". $row['additional'] ."'>";
                echo "<input type='hidden' name='price' value='". $row['price'] ."'>";
                echo "<button type='submit' class='btn-form-about' data-id='" . $row['id'] . "'>Подробнее</button>";
                echo "</div>";
                echo "</form>";
                echo "</div>";
            }
            $db->close();
        ?>
        </div>
    </div>
    <?php include'views/partials/bottom.php' ?>
</body>
</html>