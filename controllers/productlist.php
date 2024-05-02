
<?php
  $db = new SQLite3('../database/database.db');
  $stmt = $db->query('SELECT * FROM Products');
  
  while ($row = $stmt->fetchArray()) {
      echo "<div class='products-row'>";
      echo "<form action='../controllers/deleteproduct.php' method='get'>";
      echo "<input type='hidden' name='delete_id' value= " .$row['id']." >";
      echo "<p>ID: " . $row['id'] . "</p>";
      echo "<h3 class='product-name'>Name: " . $row['name'] . "</h3>";
      echo "<p class='product-descriptional'>Descriptional: " . $row['description'] . "</p>";
      echo "<p class='product-additional'>Additional: " . $row['additional'] . "</p>";
      echo "<p class='product-price'>Price: " . $row['price'] . "</p>";
      echo "<button type='submit' class='btn-form-dell'>Удалить</button>";
      echo "</form>";
      echo "</div>";
  }
  
  $db->close();
?>