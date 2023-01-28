<?php
require_once "database.php";

class Product extends Database{

    public function addProduct($product_name, $price, $quantity){
        $sql = "INSERT INTO products(product_name, price, quantity) VALUES('$product_name', '$price', '$quantity')";
       
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");//index.php
            exit;
        }else{
            die("Error creating user: " . $this->conn->error);
        }
        
    

    }

    public function displayProducts(){
        $sql = "SELECT * FROM products ";

        if ($result = $this->conn->query($sql)){
            // while($item = $result->fetch_assoc()){
            //     $items [] = $item;
            // }
            return $result;
        }else{
            die("Error retrieving all products: " . $this-> conn->error);
        }
    }

    public function displaySpecificProduct($product_id){
        $sql = "SELECT * FROM products WHERE id = $product_id";
        if ($result = $this->conn->query($sql)){
           
            return $result->fetch_assoc();
        }else{
            die("Error retrieving the product: " . $this-> conn->error);
        }
    }

    public function updateProduct($product_id, $product_name, $price, $quantity){
    $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id  = $product_id ";
    if ($result = $this->conn->query($sql)){
        header("location: ../views/dashboard.php");
        exit;
    }else{
        die("Error updating product: " . $this-> conn->error);
    }
}

    public function deleteProduct($product_id){
        $sql = "DELETE FROM products WHERE id = $product_id";
        if ($result = $this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error deleting user: " . $this-> conn->error);
        }
    }

    public function deductQuantity($product_id, $buy_quantity){
        
    $sql = "UPDATE products SET quantity = quantity - $buy_quantity WHERE id  = $product_id ";
    if ($result = $this->conn->query($sql)){
        header("location: ../views/dashboard.php");
        exit;
    }else{
        die("Error updating product: " . $this-> conn->error);

    
    }
}

}