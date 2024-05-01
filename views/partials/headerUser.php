<?php 
session_start();

if (isset($_SESSION['userName']) && isset($_SESSION['userEmail'])) { ?>
    <div class="container-header">
        <div class="logotip">Parfume</div>
        <div class="container-header-button">
            <ul class="container-link">
                <li class="header-button"><a class="head-btn" href="/">Главная</a></li>
                <li class="header-button"><a class="head-btn" href="">Где найти</a></li>
                <li class="header-button"><a class="head-btn" href="">Профиль</a></li>
                <li class="header-button"><a class="head-btn" href="../../controllers/logout.php">Выйти</a></li>
            </ul>
        </div>
    </div>
<?php } else { ?>
    <div class="container-header">
        <div class="logotip">Parfume</div>
        <div class="container-header-button">
            <ul class="container-link">
                <li class="header-button"><a class="head-btn" href="/">Главная</a></li>
                <li class="header-button"><a class="head-btn" href="./views/registerForm.php">Регистрация</a></li>
                <li class="header-button"><a class="head-btn" href="./views/loginForm.php">Войти</a></li>
                <li class="header-button"><a class="head-btn" href="">Где найти</a></li>
            </ul>
        </div>
    </div>
<?php } ?>