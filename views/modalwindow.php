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
    if (isset($_SESSION['userName']) && isset($_SESSION['userEmail'])) {
                if (isset($_SESSION['productName'])) {
                    $name = $_SESSION['productName'];
                    $username = $_SESSION['userName'];
                    $userphone = $_SESSION['userPhone'];
                    $useremail = $_SESSION['userEmail'];
                    $description = $_SESSION['productDescription'];
                    $additional = $_SESSION['productAdditional']; 
                    $price = $_SESSION['productPrice'];
                    echo "<form action='../controllers/modaltocart.php' method='post'>";
                    echo "<div class='container-modal'>";
                    echo "<div class='container-modal-left'>";
                    echo "<img class='card-photo-modal' src='../public/images/haeder-image.png' alt='бутылка('>";
                    echo "</div>";
                    echo "<div class='container-modal-right'>";
                    echo "<a href='/' class='button-close'>Закрыть</a>";
                    echo "<h2 class='modal-text'>" . htmlspecialchars($name) . "</h2>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($description) . "</h3>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($additional) . "</h3>";
                    echo "<h3 class='modal-text'>Обьем: 100мл</h3>";
                    echo "<h3 class='modal-text'>" .'Цена: '. htmlspecialchars($price) . "</h3>";
                    echo "<input type='hidden' name='username' value='$username'>";
                    echo "<input type='hidden' name='userphone' value='$userphone'>";
                    echo "<input type='hidden' name='useremail' value='$useremail'>";
                    echo "<input type='hidden' name='title' value='$description'>";
                    echo "<input type='hidden' name='additional' value='$additional'>";
                    echo "<input type='hidden' name='price' value='$price'>";
                    echo "<input type='hidden' name='product_name' value='$name'>";
                    echo "<button type='submit' class='bybutton'>Купить</button>";
                    echo "</div>";
                    echo "</div>";
                    echo "</form>";
                }
            } else {
                if (isset($_SESSION['productName'])) {
                    $name = $_SESSION['productName'];
                    $description = $_SESSION['productDescription'];
                    $additional = $_SESSION['productAdditional']; 
                    $price = $_SESSION['productPrice'];
                    echo "<form action='../controllers/modaltocart.php' method='post'>";
                    echo "<div class='container-modal'>";
                    echo "<div class='container-modal-left'>";
                    echo "<img class='card-photo-modal' src='../public/images/haeder-image.png' alt='бутылка('>";
                    echo "</div>";
                    echo "<div class='container-modal-right'>";
                    echo "<a href='/' class='button-close'>Закрыть</a>";
                    echo "<h2 class='modal-text'>" . htmlspecialchars($name) . "</h2>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($description) . "</h3>";
                    echo "<h3 class='modal-text'>" . htmlspecialchars($additional) . "</h3>";
                    echo "<h3 class='modal-text'>Обьем: 100мл</h3>";
                    echo "<h3 class='modal-text'>" .'Цена: '. htmlspecialchars($price) . "</h3>";
                    echo "<a type='submit' class='bybutton' href='loginForm.php'>Войти</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</form>";
                }
            }
    ?>
    </div>
    <?php include'partials/bottom.php' ?>
</body>
</html>