<?php
$productsnew ="";
$con = new mysqli("localhost:3307", "root", "", "ecommerce");
if(!$con){
    echo "connection failed";
}else{
$sql = "SELECT * FROM product ";
$count=5;
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $productsnew .= '<div class="item">
            <a href="product.php?product='.$row['productid'].'">
            <img src="./images/products/'.$row['manager'].'" alt="">
            <div class="product-name">'.$row['name'].'</div>
          </a>
          </div>';
          $count--;
          if($count <=0){
            break;
          }
    }
$newProduct = '<div class="container tag-yellow">
        <div class="box-title">
          New Arrivals &ensp;&ensp;&ensp;🎉
        </div>
      </div>
      <div class="container">
        <div class="owl-carousel owl-theme">
          '.$productsnew.'
      </div>
      </div>';
  }
      ?>