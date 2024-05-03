
<?php
$db = new SQLite3('../database/database.db');

if (isset($_POST['username'], $_POST['userphone'], $_POST['useremail'], $_POST['title'], $_POST['additional'], $_POST['price'], $_POST['product_name'])) {
    $username = $_POST['username'];
    $userphone = $_POST['userphone'];
    $useremail = $_POST['useremail'];
    $title = $_POST['title'];
    $additional = $_POST['additional'];
    $price = $_POST['price'];
    $product_name = $_POST['product_name'];

    $stmt_check = $db->prepare("SELECT * FROM Carts WHERE product_name = :product_name");
    $stmt_check->bindValue(':product_name', $product_name, SQLITE3_TEXT);
    $result_check = $stmt_check->execute();
    $existing_user = $result_check->fetchArray(SQLITE3_ASSOC);

    if ($existing_user) {
        echo "Парфюм уже добавлен, <a href='/'>вернитесь на главную.</a>";
    } else {
        $query = "INSERT INTO Carts (username, userphone, useremail, title, additional, price, product_name) VALUES (:username, :userphone, :useremail, :title, :additional, :price, :product_name)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':userphone', $userphone, SQLITE3_TEXT);
        $stmt->bindValue(':useremail', $useremail, SQLITE3_TEXT);
        $stmt->bindValue(':title',  $title, SQLITE3_TEXT);
        $stmt->bindValue(':additional', $additional, SQLITE3_TEXT);
        $stmt->bindValue(':price', $price, SQLITE3_TEXT);
        $stmt->bindValue(':product_name', $product_name, SQLITE3_TEXT);

        $result = $stmt->execute();

        if ($result) {
            echo "Продукт был успешно добавлен в корзину.";
            header("Location: ../views/profilePage.php");
            exit();
        } else {
            echo "Произошла ошибка при добавлении продукта в корзину.";
        }
    }

    $db->close();

} else {
    echo "Не все данные были переданы через форму.";
}
?>