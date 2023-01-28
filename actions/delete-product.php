<?php


include "../class/products.php";

$product = new Product;
$product->deleteProduct($_GET['product_id']);
?>