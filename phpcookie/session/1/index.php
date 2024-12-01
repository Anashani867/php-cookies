<?php
include("config.php");
session_start();
$nameusererro = "";
$passworderro ="";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <p> 
        <label for="username">username: </label>
        <input type="text" name="username" >
        <span style="color: red;"><?php echo $nameusererro ?></span>
        </p>
        
        
        <label for="password">password: </label>
        <input type="password" name="password" >
        <span style="color: red;"><?php $passworderro ?></span>
        <input type="submit" name="login" value="login">
    </form>
    
</body>
</html>


<?php


if (isset($_GET["login"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    


    if (!empty($username) && !empty($password)) {
        
        if (preg_match("/^[a-zA-Z]+$/", $username)) {
            
            if (strlen($password) >= 8) {
                if (preg_match("#[0-9]+#", $password)) {
                    if (preg_match("#[a-z]+#", $password)) {
                        if (preg_match("#[A-Z]+#", $password)) {

                            $newSessionId = session_create_id();
                            session_id($newSessionId);
                            session_regenerate_id(true);

                            echo "Session ID changed to: $newSessionId";


                            $_SESSION["username"] = $username;
                            $_SESSION["password"] = $password;

                            header("location: home.php");
                            exit(); 
                            echo "<br />Password must contain at least one uppercase letter.";
                        }
                    } else {
                        echo "<br />Password must contain at least one lowercase letter.";
                    }
                } else {
                    echo "<br />Password must contain at least one digit.";
                }
            } else {
                echo "<br />Password must be at least 8 characters long.";
            }

        } else {
            echo "<br />Username should contain only letters.";
        }

    } else {
        echo "Please enter both username and password.";
    }
}
?>

