
<?php
    $name = $_POST['name'];
    $description = $_POST['description'];
    $additional = $_POST['additional'];
    $price = $_POST['price'];
    
    session_start();
    $_SESSION['productName'] = $_POST['name'];
    $_SESSION['productDescription'] = $_POST['description'];
    $_SESSION['productAdditional'] = $_POST['additional'];
    $_SESSION['productPrice'] = $_POST['price'];

    header("Location: ../views/modalwindow.php");
?>