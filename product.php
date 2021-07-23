<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font asesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css -->
    <link rel="stylesheet" href="./css/home.css">

    <!-- owl carosal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>E-Commerce </title>
  </head>
  <body>
 
    <?php
    session_start();
    include('./php/config.php');
    include_once('./phptemplate/navbar.php');
    echo $navbar;
    $productid = $_GET['product'];
    
$sql = "SELECT * FROM `product` WHERE `productid` = $productid ";
$result = mysqli_query($con,$sql);
$row =  mysqli_fetch_array($result);
    ?>
<div class="container product-main-box">
    <div class="image-product">
        <img src="./images/products/<?php echo $row['manager']  ?>" alt="">
    </div>
    <div class="image-discription">
        <span class="company-name"><?php echo $row['company']  ?></span>
        <h1 class="product-name-title"><?php echo $row['name']  ?></h1>
        <p class="features"><?php echo $row['subtitle']  ?></p>
        <hr>
        <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            4.5/5
        </div>
        <div class="product-price">
            Product price<h4 class="orignal-price text-danger" id="orignal rate"><?php echo $row['orignal']  ?> INR</h4>Our price
            <h4 class="product-price text-success" id="saleprice"><?php echo $row['sale']  ?></h4>
        </div>
        <div class="icons">
            <i class="fas fa-truck gold"><br><span class="product-icon-title"> Delivery <br></span></i>
            <i class="fas fa-shield-alt gold"><br><span class="product-icon-title"> warrenty</span></i>
            <i class="fas fa-undo-alt gold"><br><span class="product-icon-title">Replacable</span></i>
            <i class="fas fa-wallet gold"><br><span class="product-icon-title">COD</span></i>
        </div>
        <form action="php/addcart.php" method="POST">
        <div class="quantity-box">Quantity
            <span class="decrese-btn" onclick="decrese()">-</span>
            <input class="quantity" id="quantity" value="1" disabled></input>
            <span class="increse-btn" onclick="increse()">+</span>
        </div>
        <span class="text-success">In stock</span>
        <div class="totalvalue"> Total value
        <span class="ml-5 text-warning" id="total"><?php echo $row['sale']  ?></span></div>
        <div class="button-section">
            <button type="submit" name="cart" class="btn btn-warning btn-flex">Add to cart</button>
            <button type="submit" name="buy" class="btn btn-success btn-flex">Buy</button>
        </div>
    </form>
    </div>
</div>
<hr class="container">
<div class="container">
<h3 class="container">About this product</h1>
<?php echo $row['discription']  ?>
</div>
    <div class="container">
      <div class="container tag-yellow p1">
        <div class="box-title p1">
          Similar Product &ensp;&ensp;✨
        </div>
      </div>
      <div class="container">
        <div class="owl-carousel owl-theme">
          <?php
              $companyname = $row['company'];
              $sql2 = "SELECT * FROM `product` WHERE `company` = '$companyname'";
    $result2 = mysqli_query($con,$sql2);
    // echo mysqli_fetch_assoc($result2);
    while($row2 = mysqli_fetch_assoc($result2))
    {
      echo'<div class="item">
      <a href="product.php?product='.$row2['productid'].'">
      <img src="./images/products/'.$row2['manager'].'" alt="">
      <div class="product-name">'.$row2['name'].'</div>
    </a>
    </div>';
    }
          ?>
      </div>
      </div>
    </div>
    <?php
include_once('./phptemplate/blog.php');
echo $blog;
include('./phptemplate/specialPrice.php');
      echo $specialPrice;
?>
<div class="footer">
        <div class=" container footer-title">
          PHP Project by Bhupendra sambare
        </div>
        <div class="copyright">
          Copyright © reserve by Bhupendra sambare
        </div>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function increse(){
        var d = document.getElementById('quantity').value;
        d = parseInt(d);
        d++;
        if(d <=5){
            document.getElementById('quantity').value = d
            var total = parseInt(document.getElementById('saleprice').innerHTML)
            document.getElementById('total').innerHTML = total * d
        }
    }
    function decrese(){
        var d = document.getElementById('quantity').value;
        d = parseInt(d);
        d--;
        if(d >=1){
            document.getElementById('quantity').value = d
            var total = parseInt(document.getElementById('saleprice').innerHTML)
            document.getElementById('total').innerHTML = total * d
        }
    }
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})
</script>
  </body>
</html>