<?php

include "../class/products.php";

$product_id = $_GET['product_id'];
$buy_quantity = $_POST['buy_quantity'];


$product = new Product;


$product->deductQuantity($product_id, $buy_quantity);