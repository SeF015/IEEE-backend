<?php
include "design/header.php";
?>

<form action="Includes/show.inc.php" method="post" class="get-form ">
        <label for="product-name">Product name</label>
        <input type="text" name="productName" id="product-name">
        <button type="submit">Get</button>
        <a href="location ../app.php">Back to main</a>
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

        if (isset($_GET['name']) && isset($_GET['price'])) {
            echo "<p id='error' style='color:red; text-align:center;'>You select " 
            . htmlspecialchars($_GET['name']) .
            " and its price ". htmlspecialchars($_GET['price']) ."</p>";
           
        }
?>

</body>

</html>