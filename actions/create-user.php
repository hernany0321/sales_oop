 <?php
        include "../class/user.php";

        // collect the data

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // create an object

        $user = new User;

        $user->createUser($first_name, $last_name, $username, $password);
    

?>