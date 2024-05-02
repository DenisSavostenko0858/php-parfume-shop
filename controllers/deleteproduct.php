
<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    
    $db = new SQLite3('../database/database.db');
    $stmt = $db->prepare('DELETE FROM Products WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    
    $db->close();
    
    header('Location: ../views/adminpanel.php');
    exit();
} else {
    echo "Произошла ошибка при удалении продукта.";
}