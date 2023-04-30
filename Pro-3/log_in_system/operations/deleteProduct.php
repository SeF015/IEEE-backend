<?php
include "design/header.php";
?>


<form action="Includes/delete.inc.php" method="post" class="delete-form ">
        <label for="product-name">Product name</label>
        <input type="text" name="productName" id="product-name">
        <button type="submit" class="delete-product">Delete</button>
        <a href="location: ../app.php">Back to main</a>
</form>