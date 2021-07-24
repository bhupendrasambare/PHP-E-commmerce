<?php
    include "./config.php";
    $productid =   (int)$_POST["deleteitem"];
if(isset($_POST["delete"])){

    $sql = 'DELETE FROM cart WHERE id = '.  $productid;
    if(mysqli_query($con,$sql)){

        header("Location:../cart.php");
    }
    else{
        echo "<h1>Connection fail</h1>";
    }
}




elseif(isset($_POST["buy"])){
    $sql = 'SELECT * FROM cart WHERE id = '.  $productid;
    $result = mysqli_query($con,$sql);
$row =  mysqli_fetch_array($result);

        $product = (int)$row["productid"];
        echo $product;
        echo "<br>";
        $row2 = mysqli_fetch_array(mysqli_query($con,$sql));
            $quantity = (int)$row2['quantity'];
            echo $row2['quantity']."<br>";
            $sql2 = "INSERT INTO `order` (`id`, `productid`, `userid`, `quantity`) VALUES (NULL, $product, '', $quantity)";
            if(mysqli_query($con,$sql2)){
                echo "success";
                $sql9 = 'DELETE FROM cart WHERE id = '.  $productid;
                if(mysqli_query($con,$sql9)){
                    header("Location:../order.php");
                }
            }

}
?>