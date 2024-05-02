
<?php
  $db = new SQLite3('../database/database.db');
  $stmt = $db->query('SELECT * FROM Carts');
  
  while ($row = $stmt->fetchArray()) {
      echo "<div class='products-row'>";
      echo "<form action='../controllers/' method='get'>";
      echo "<input type='hidden' name='delete_id' value= " .$row['id']." >";
      echo "<p>ID: " . $row['id'] . "</p>";
      echo "<p>Имя: " . $row['username'] . "</p>";
      echo "<h3 class='product-name'>Парфюм: " . $row['product_name'] . "</h3>";
      echo "<p class='product-descriptional'>Описание: " . $row['title'] . "</p>";
      echo "<p class='product-additional'>Ноты: " . $row['additional'] . "</p>";
      echo "<p class='product-price'>Цена: " . $row['price'] . "</p>";
      echo "<button type='submit' class='btn-form-dell'>Удалить</button>";
      echo "</form>";
      echo "</div>";
  }
  
  $db->close();
?>