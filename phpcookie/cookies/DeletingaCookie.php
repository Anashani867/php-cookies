<?php
if (isset($_POST["chk"])) {

    if(isset($_COOKIE["fav_food"])){
  
    setcookie("fav_food", "",time()-1);
}
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php


if(!isset($_COOKIE["fav_food"])){
    setcookie("fav_food", "pizza",time()+ (6));
}
// Check if the cookie exists and display the appropriate message
if (isset($_COOKIE["fav_food"])) {
    echo "buy some {$_COOKIE["fav_food"]} !!";
} else {
    echo "I don't know your favorite food";
}

?>

<input type="hidden" name="chk" value="true"/>
<input type="submit" value="Delete"/>

    </form>
</body>
</html>

