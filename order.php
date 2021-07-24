<?php
      include "./phptemplate/header.php";
      echo $header;
      include "./phptemplate/navbar.php";
      echo $navbar;
      echo '<div class="cart container">
      <div class="cart-title-main mt-5 mb-5 d-flex flex-row-reverse bd-highlight">
        Your Orders &ensp;🛒
      </div>
      ';
      include "./php/config.php";
      $sql = "SELECT * FROM `order`";
    $result = mysqli_query($con,$sql);
    $totalcart = "";
    while($rows = mysqli_fetch_assoc($result))
    {
        $sql4 = 'SELECT * FROM product WHERE productid = '.  $rows['productid'];
          $result2 = mysqli_query($con,$sql4);
          $row2 = mysqli_fetch_array($result2);
        $totalcart .=  '<div class="container cart-container">
        <div class="cart-item-image">
          <img src="./images/products/'.$row2['manager'].'" alt="">
        </div>
        <div class="quantity-box">
          <div class="cart-product-qt-box mt-2">
            Quantity-'.$rows["quantity"].'
          </div>
        </div>
        <div class="quantity-box">
          <div class="cart-product-qt-box mt-2">
            Total value <span class="text-success">'.$rows["quantity"] * $row2["sale"].'</span>
          </div>
        </div>
      </div>';
    }
    if($totalcart != "")
    {
      echo $totalcart;
    }else{
      echo "No order placed<br>";
    }
    echo '</div>';
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