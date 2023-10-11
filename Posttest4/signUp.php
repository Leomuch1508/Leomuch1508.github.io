<?php
session_set_cookie_params(10800);
session_start();




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["User"];
        $email = $_POST["Email"];
        $noHp = $_POST["Tel"];
        $alamat = $_POST["Add"];
        $password = $_POST["Password"];
    
        $_SESSION['User'] = $username;
        $_SESSION['Email'] = $email;
        $_SESSION['Tel'] = $noHp;
        $_SESSION['Add'] = $alamat;
        $_SESSION['Password'] = $password;
        
    }
    
    header('location:./home.php');


?>