<?php

if(isset($_POST['cart'])){
    echo "cart";
    header("Location:../cart.php");
}
elseif(isset($_POST['buy'])){
    echo "buy";
}
?>