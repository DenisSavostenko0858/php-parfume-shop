<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <?php include'partials/headerGuest.php' ?>
    <div class="after-header"><div class="logotip">Registration</div></div>
    <div class="container-form">
        <form action="../controllers/register.php" method="post" class="form-content">
            <input type="hidden" name="role" value="false">
            <div class="input">
                <p class="addition-form">Ваше имя:</p>
                <input type="text" class="input-form" name="name" placeholder="Иван">
            </div>
            <div class="input">
                <p class="addition-form">Фамилия:</p>
                <input type="text" class="input-form" name="surname" placeholder="Иванов">
            </div>
            <div class="input">
                <p class="addition-form">Почта:</p>
                <input type="email" class="input-form" name="email" placeholder="Иван@mail.com">
            </div>
            <div class="input">
                <p class="addition-form">Телефон:</p>
                <input type="tel" class="input-form" name="telephone" placeholder="+7 999 999 99 99">
            </div>
            <div class="input">
                <p class="addition-form">Пароль:</p>
                <input type="password" class="input-form" name="password" placeholder="Ivan123">
            </div>
            <div class="input">
                <p class="addition-form">Повторите пароль:</p>
                <input type="password" class="input-form" name="password-repit" placeholder="Password">
            </div>
            <button type="submit" class="btn-form">Регистрация</button>
        </form>
    </div>
    <?php include'partials/bottom.php' ?>
</body>
</html>