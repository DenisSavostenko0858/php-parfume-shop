<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <?php include'partials/headerGuest.php' ?>
    <div class="after-header"><div class="logotip">Войти</div></div>
    <div class="container-form">
        <form action="../controllers/login.php" method="post" class="form-content">
            <div class="input">
                <p class="main-addition-form">Введите данные что использовали</p>
                <p class="main-addition-form">при регистрации</p>
                <p class="main-addition-form">Если вы еще не зарегистрированы,</p>
                <p class="main-addition-form">перейдите на страницу <span class="sub-color"><a class="sub-color" href="./registerForm.php">регистрации</a></span></p>
            </div>
            <div class="input">
                <p class="addition-form">Почта:</p>
                <input type="email" class="input-form" name="email" placeholder="Иван@mail.com">
            </div>
            <div class="input">
                <p class="addition-form">Пароль:</p>
                <input type="password" class="input-form" name="password" placeholder="Ivan123">
            </div>
            <button type="submit" class="btn-form">Войти</button>
        </form>
    </div>
    <?php include'partials/bottom.php' ?>
</body>
</html>