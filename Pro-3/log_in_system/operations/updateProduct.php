<?php
include "design/header.php";
?>

<form action="Includes/update.inc.php" method="post" class="update-form ">
        <label for="product-name">Product name</label>
        <input type="text" name="productName" id="product-name">
        <label for="product-price">price</label>
        <input type="number" name="price" id="product-price">
        <button type="submit">Update</button>
        <a href="location: ../app.php">Back to main</a>
</form>
<?php
          if (isset($_GET['error'])) {
            echo "<p id='error' style='color:red; text-align:center;'>"
             . htmlspecialchars($_GET['error']) . "</p>";
            echo "<script>
                    setTimeout(function() {
                        let error = document.getElementById('error');
                        error.parentNode.removeChild(error);
                    }, 6000); // remove the element after 3 seconds
                </script>";
        }

        if (isset($_GET['msg'])) {
            echo "<p id='error' style='color:red; text-align:center;'>"
            . htmlspecialchars($_GET['msg']) ."</p>";
            echo "<script>
            setTimeout(function() {
                let error = document.getElementById('error');
                error.parentNode.removeChild(error);
            }, 6000); // remove the element after 3 seconds
            </script>";
           
        }
?>
        </body>

</html>