<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подробнее</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<?php include'partials/headerUser.php' ?>
    <div class="modal-body">
    <?php
        session_start();
                if (isset($_SESSION['productName'])) {
                    $name = $_SESSION['productName'];
                    $description = $_SESSION['productDescription'];
                    $additional = $_SESSION['productAdditional']; 
                    $price = $_SESSION['productPrice'];
                    echo "<form action='' method=''>";
                    echo "<div class='container-modal'>";
                    echo "<div class='container-modal-left'>";
                    echo "<img class='card-photo-modal' src='../public/images/haeder-image.png' alt='бутылка('>";
                    echo "</div>";
                    echo "<div class='container-modal-right'>";
                    echo "<a href='/' class='button-close'>Закрыть</a>";
                    echo "<h2 class='modal-text'>" . htmlspecialchars($name) . "</h2>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($description) . "</h3>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($additional) . "</h3>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($price) . "</h3>";
                    echo "<button type='submit' class='bybutton'>Купить</button>";
                    echo "</div>";
                    echo "</div>";
                    echo "</form>";
                }
    ?>
    </div>
</body>
</html>