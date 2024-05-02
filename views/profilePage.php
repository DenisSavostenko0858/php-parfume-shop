<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <?php include'./partials/headerUser.php' ?>
    <div class="content-cart">
        <h2>Корзина</h2>
        <div class="content-cart-db">
        <?php include'../controllers/cartlistuser.php' ?>
        </div>
    </div>
    <?php include'./partials/bottom.php' ?>       
</body>
</html>