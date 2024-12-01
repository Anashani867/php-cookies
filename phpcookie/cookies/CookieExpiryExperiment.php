<?php

setcookie("fav_food", "pizza",time()+ (60),"/");

if(isset($_COOKIE["fav_food"])){
    echo "buy some {$_COOKIE["fav_food"]} !!";
}
else{
    echo " i dont know your favourite food";
}


?>