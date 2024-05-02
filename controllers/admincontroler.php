
<?php
$db = new SQLite3('../database/database.db');

if (isset($_POST['name'], $_POST['description'], $_POST['additional'], $_POST['price'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $additional = $_POST['additional'];
    $price = $_POST['price'];

    $stmt_check = $db->prepare("SELECT * FROM Products WHERE name = :name");
    $stmt_check->bindValue(':name', $name, SQLITE3_TEXT);
    $result_check = $stmt_check->execute();
    $existing_user = $result_check->fetchArray(SQLITE3_ASSOC);

    if ($existing_user) {
        echo "Парфюм с таким name уже добавлен, <a href='../views/adminpanel.php'>попробуйте еще раз.</a>";
    } else {
        $query = "INSERT INTO Products (name, description, additional, price) VALUES (:name, :description, :additional, :price)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':name', $name, SQLITE3_TEXT);
        $stmt->bindValue(':description',  $description, SQLITE3_TEXT);
        $stmt->bindValue(':additional', $additional, SQLITE3_TEXT);
        $stmt->bindValue(':price', $price, SQLITE3_TEXT);

        $result = $stmt->execute();

        if ($result) {
            echo "Продукт был успешно добавлен.";
            header("Location: ../views/adminpanel.php");
            exit();
        } else {
            echo "Произошла ошибка при добавлении продукта.";
        }
    }

    $db->close();

} else {
    echo "Не все данные были переданы через форму.";
}
?>