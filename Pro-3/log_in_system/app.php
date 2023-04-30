<?php
include "design/header.php";
?>

<form class="app-form" method="post" action="">
        <button type="submit" name="create" value="location: operations/createProduct.php">CreateProduct</button>
        <button type="submit" class="delete" name="delete"
            value="location: operations/deleteProduct.php">Delete Product</button>
        <button type="submit" name="get" value="location: operations/showProduct.php">Get Product</button>
        <button type="submit" name="update" value="location: operations/updateProduct.php">UpdateProduct</button>
</form>

<?php
            
            if (isset($_POST['create'])) {
              // Redirect to create Page 
              header("Location:".$_POST['create']);
              exit();
            }
            elseif (isset($_POST['delete'])) {
              // Redirect to delete Page 
              header("Location:".$_POST['delete']);
              exit();
            }
            elseif (isset($_POST['get'])) {
              // Redirect to get Page 
              header("Location:".$_POST['get']);
              exit();
            }
            elseif (isset($_POST['update'])) {
              // Redirect to update Page 
              header("Location:".$_POST['update']);
              exit();
            }
          ?>

</body>

</html>