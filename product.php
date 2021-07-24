<?php
    include "./phptemplate/header.php";
    echo $header;
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
            <input class="quantity" type="text" name="quantity" id="quantity" value="1" onkeyup="checkquantitykeyup()"></input>
            <span class="increse-btn" onclick="increse()">+</span>
        </div>
        <span class="text-success">In stock</span>
        <div class="totalvalue"> Total value
        <span class="ml-5 text-warning" id="total"><?php echo $row['sale']  ?></span></div>
        <div class="button-section">
          <input type="text" value="<?php echo  $_GET['product'] ?>" name="productid" hidden>
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
    function checkquantitykeyup(){
      var d = document.getElementById('quantity').value;
        d = parseInt(d);
        if(d <=5){
            var total = parseInt(document.getElementById('saleprice').innerHTML)
            document.getElementById('total').innerHTML = total * d
        }else{ 
          d=5;
          document.getElementById('quantity').value=d;
          var total = parseInt(document.getElementById('saleprice').innerHTML)
            document.getElementById('total').innerHTML = total * d
        }
    }
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