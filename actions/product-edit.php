<?php
include "../class/products.php";
$product_id = $_GET['product_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];


$product = new Product;

$product->updateProduct($product_id, $product_name, $price, $quantity);