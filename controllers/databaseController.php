
<?php
$db = new SQLite3('../database/database.db');

// Users
$db->exec('CREATE TABLE IF NOT EXISTS Users (
    id INTEGER PRIMARY KEY,
    role TEXT,
    name TEXT,
    surname TEXT,
    email TEXT,
    telephone TEXT,
    password TEXT
)');

// Products
$db->exec('CREATE TABLE IF NOT EXISTS Products (
    id INTEGER PRIMARY KEY,
    name TEXT,
    description TEXT,
    additional TEXT,
    price TEXT
)');

// Carts
$db->exec('CREATE TABLE IF NOT EXISTS Carts (
    id INTEGER PRIMARY KEY,
    username TEXT,
    userphone TEXT,
    usermail TEXT,
    title TEXT,
    additional TEXT,
    price TEXT,
    product_name TEXT
)');

$db->close();

echo "База данных успешно создана.";

?>