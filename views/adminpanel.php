<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <?php include'./partials/headerUser.php' ?>
    <h2>Панель администратора</h2>
    <div class="container-body-form">
        <div class="form-content">
            <h3>Добавление продукции</h3>
            <form action="../controllers/admincontroler.php" method="post">
            <div class="input">
                <p class="addition-form">Имя продукта:</p>
                <input type="text" class="input-form" name="name" placeholder="Parfume">
            </div>
            <div class="input">
                <p class="addition-form">Описание:</p>
                <input type="text" class="input-form" name="description" placeholder="Описание">
            </div>
            <div class="input">
                <p class="addition-form">Состав:</p>
                <input type="text" class="input-form" name="additional" placeholder="Ноты парфюма">
            </div>
            <div class="input">
                <p class="addition-form">Цена:</p>
                <input type="text" class="input-form" name="price" placeholder="250р">
            </div>
            <button type="submit" class="btn-form">Добавить продукт</button>
            </form>
        </div>
    </div>
    <div class="container-body-form-products">
        <div class="form-content">
            <h3>Продукция</h3>
                <?php include'../controllers/productlist.php' ?>
        </div>
    </div>
    <?php include'./partials/bottom.php' ?>
</body>
</html>