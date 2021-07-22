<?php
$con = new mysqli("localhost:3307", "root", "", "ecommerce");
if(!$con){
    echo "connection failed";
}
?>