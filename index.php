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
                <li class="header-button"><a class="sub-color" href="/views/adminpanel.php">Перейдите в панель администратора</a></li> 
            </div>        
        <?php } ?>
        <h2>Пафрюмы личного использования</h2>
        <div class="content-from-database">
        <?php
            $db = new SQLite3('database/database.db');
            $stmt = $db->query('SELECT * FROM Products');

            while ($row = $stmt->fetchArray()) {
                echo "<div class='product-card'>";
                echo "<form action='' method='' class='form-product-card'>";
                echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
                echo "<img class='card-photo' src='./public/images/haeder-image.png' alt='бутылка('>";
                echo "<div class='card-about'>";
                echo "<h3 class='product-name-card'>" . $row['name'] . "</h3>";
                echo "<p class='product-price-card'>Цена: " . $row['price'] . "</p>";
                echo "<button type='button' class='btn-form-about' data-id='" . $row['id'] . "'>Подробнее</button>";
                echo "</div>";
                echo "</form>";
                echo "</div>";
            }
            $db->close();
        ?>

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
    <div id="modal" class="modal">
        <div class="modal-content">
            <button class="close">Закрыть</button>
            <form action="../modules/add_to_cart.php" method="post" class="formparfume">
                <div><img src="../public/images/1.png" class="modal-img"></div>
                <div class="modal-content-text">
                <h2 id="modal-title">Заголовок модального окна</h2>
                <input type="hidden" name="title" id="modal-title">
                <p id="modal-description">Содержимое модального окна</p>
                <p id="modal-additional">Содержимое модального окна</p>
                <p id="modal-price">Содержимое модального окна</p>
                <input type="hidden" name="price" id="modal-price">
                <input type="submit" id="buyButton" data-title.value data-price="персик" class="card-button" value="Купить">
            </div>
            </form>
        </div>
    </div>
    <?php include'views/partials/bottom.php' ?>
    <script>
        var modal = document.getElementById('modal');
        var buttons = document.getElementsByClassName('btn-form-about');
        var close = document.getElementsByClassName('close')[0];
        var title = document.getElementById('modal-title');
        var description = document.getElementById('modal-description');
        var price = document.getElementById('modal-price');
        var additional = document.getElementById('modal-additional');

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            modal.style.display = 'block';
            title.innerText = this.getAttribute('data-title');
            description.innerText = this.getAttribute('data-description');
            price.innerText = this.getAttribute('data-price');
            additional.innerText = this.getAttribute('data-additional');

            var titleValue = this.getAttribute('data-title');
            var descriptionValue = this.getAttribute('data-description');
            var priceValue = this.getAttribute('data-price');
            var additionalValue = this.getAttribute('data-additional');
        });
    }

    close.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    </script>
</body>
</html>