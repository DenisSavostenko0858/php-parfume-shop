
<?php
$db = new SQLite3('../database/database.db');

if (isset($_POST['email'], $_POST['password'])) {
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $result = $stmt->execute();
        $user = $result->fetchArray(SQLITE3_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['userName'] = $user['name'];
            $_SESSION['userEmail'] = $user['email'];
            $_SESSION['userRole'] = $user['role'];
        
            echo "Вы успешно авторизованы!";

            header("Location: ../index.php");
            exit();
        } else {
            echo "<div>Неправильный пароль или логин <a href='../views/loginForm.php'>попробуйте еще раз</a></div>";
        }
    }
} else {
    echo "<div>Не все данные были переданы через форму <a href='../views/loginForm.php'>попробуйте еще раз</a></div>";
}
?>