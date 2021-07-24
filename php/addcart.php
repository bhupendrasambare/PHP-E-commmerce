<?php
    include "./config.php";
    $quantity =  $_POST["quantity"];
    $productid =  $_POST["productid"];
if(isset($_POST['cart'])){
    $sql = "INSERT INTO `cart` (`id`, `userid`, `productid`, `quantity`) VALUES (NULL, '', '$productid', '$quantity')";

    if(mysqli_query($con,$sql)){

        header("Location:../cart.php");
    }else{
        echo"<h1>Connection fail</h1>";
    }
}elseif(isset($_POST['buy']))
{
    $sql2 = "INSERT INTO `order` (`id`, `userid`, `productid`, `quantity`) VALUES (NULL, '', $productid, $quantity)";

    if(mysqli_query($con,$sql2)){

        header("Location:../order.php");
    }else{
        echo"<h1>Connection fail</h1>";
    }
}
?>