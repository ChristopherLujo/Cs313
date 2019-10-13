<?php
    session_start();

    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];



    $products = array($name, $price, $quantity);
    

    array_push($_SESSION["Carts"], $products);

    header('location:storeFront.php');
?>