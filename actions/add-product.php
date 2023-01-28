<?php
        include "../class/products.php";

        // collect the data

        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // create an object

        $product = new Product;

        $product->addProduct($product_name, $price, $quantity);
    

?>