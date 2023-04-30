<?php
if (isset($_POST["creat"])) {
    //holding the data coming throw post method
    $product_name = $_POST["productName"];
    $product_price = $_POST["price"];


    //instansiate productControler class
    include "../classes/DBcontrol.classes.php";
    include "../classes/products.classes.php";
    include "../classes/products-controler.classes.php";
    $product = new productsControler($product_name, $product_price);

    //error handel
    $product->add_product();

    //going back to the product page
    header("location: ../products.php?error=none");
}