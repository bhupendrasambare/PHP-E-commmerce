<?php
      include "./phptemplate/header.php";
      echo $header;
      include_once('./phptemplate/navbar.php');
      echo $navbar;
          include_once('./phptemplate/carosal.php');
          echo $carosal;
          include_once('./phptemplate/newproduct.php');
          echo $newProduct;
      echo '<div class="container tag-yellow">
        <div class="box-title bg-light m-2">
          Our Products&ensp;&ensp;&ensp;&ensp; 📱
        </div>
      </div>
      <section class="container">

        <ul>
          <li class="product-list active" data-filter="all">ALL</li>
          <li class="product-list" data-filter="redmi">Redmi MI</li>
          <li class="product-list" data-filter="apple">Apple</li>
          <li class="product-list" data-filter="samsung">Samsung</li>
        </ul>
        <div class="product-filter" id="allproduct">';
include_once('./php/config.php');

$sql = "SELECT * FROM product ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<a href="product.php?product='.$row['productid'].'"><div class="itembox '.$row['company'].'"><img src="./images/products/'.$row['manager'].'" alt=""><br><div class="product-name-filter">'.$row['name'].'</div></div></a>';
    }
    echo "</div>
    </section>";   
      echo "<!-- product filter  end-->
      <!-- blog -->";
      include('./phptemplate/blog.php');
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
$(document).ready(function(){
  $('.product-list').click(function(){

    const value = $(this).attr('data-filter');
    if(value == 'all'){
      $('.itembox').show('1000');
    }else{
      $('.itembox').not('.'+value).hide('1000');
      $('.itembox').filter('.'+value).show('1000');
    }
  })
  $('.product-list').click(function(){
    $(this).addClass(' active').siblings().removeClass(' active');
  })
})
</script>
</body>
</html>