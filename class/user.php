<?php
require_once "database.php";

class User extends Database{
    
    public function createUser($first_name, $last_name, $username, $password){
        $sql = "INSERT INTO users(first_name, last_name, username,
        password) VALUES('$first_name', '$last_name', '$username', '$password')";
       
        if($this->conn->query($sql)){
            header("location: ../views");//index.php
            exit;
        }else{
            die("Error creating user: " . $this->conn->error);
        }
        
    
    }




    public function login($username, $password){
        $sql= "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if($result && $result->num_rows == 1)
        {
            //get the result
            $user_details = $result->fetch_assoc();

            $is_password_correct = password_verify($password,$user_details["password"]);

            if($is_password_correct)
            {
                session_start();
                $_SESSION["user_id"] = $user_details['id'];
                $_SESSION["username"] = $user_details['username']; 
                

                header("Location: ../views/dashboard.php");

            }else{
                die("password is incorrect.");
            }
        }else{
            die("Username doesn't exist.");
        }
        

    }
    
}