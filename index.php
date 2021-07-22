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
    <!-- nav open -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto-nav" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Account <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-user-circle"></i><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        </div>
      </div>
      </nav>
      <!-- nav cloase -->
      <!-- carosel -->
      
      <!-- corosol end -->
      <!-- owl carosal -->
      <?php
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