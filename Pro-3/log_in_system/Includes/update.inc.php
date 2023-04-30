<?php
if (isset($_POST["submit"])) {
    //holding the data coming throw post method
    $product_name = $_POST["name"];
    $price=$_POST["price"];


    //instansiate productControler class
    include "../classes/DBcontrol.classes.php";
    include "../classes/products.classes.php";
    include "../classes/products-controler.classes.php";
    $product = new productsControler($name, $price);

    //error handel
    $product->update_product();

    //going back to the product page
    header("location: ../app.php?do=update&error=none");
}