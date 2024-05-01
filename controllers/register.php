
<?php
$db = new SQLite3('../database/database.db');

if (isset($_POST['role'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'])) {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt_check = $db->prepare("SELECT * FROM Users WHERE email = :email");
    $stmt_check->bindValue(':email', $email, SQLITE3_TEXT);
    $result_check = $stmt_check->execute();
    $existing_user = $result_check->fetchArray(SQLITE3_ASSOC);

    if ($existing_user) {
        echo "Пользователь с таким email уже зарегистрирован, <a href='../views/loginForm.php'>попробуйте войти.</a>";
    } else {
        $query = "INSERT INTO Users (role, name, surname, email, password) VALUES (:role, :name, :surname, :email, :password)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':role', $role, SQLITE3_TEXT);
        $stmt->bindValue(':name', $name, SQLITE3_TEXT);
        $stmt->bindValue(':surname', $surname, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);

        $result = $stmt->execute();

        if ($result) {
            echo "Данные пользователя успешно добавлены в базу данных.";
            session_start();
            $_SESSION['userName'] = $_POST['name'];
            $_SESSION['userEmail'] = $_POST['email'];
            $_SESSION['userRole'] = $_POST['role'];

            header("Location: ../index.php");
            exit();
        } else {
            echo "Произошла ошибка при добавлении данных пользователя.";
        }
    }

    $db->close();

} else {
    echo "Не все данные были переданы через форму.";
}
?>