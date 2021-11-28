<?php
require_once 'Classes/Order.php';
require_once 'Classes/Product.php';
require_once 'Classes/Basket.php';
require_once 'Classes/BasketPosition.php';

//  $product = new Product('pizza', 500);
//  echo $product->getName().' '; // наименование продукта
//  echo $product->getPrice().' '; // стоимость позиции 
// $basketPosition = new BasketPosition($product, 2);
// echo $basketPosition->getProduct().' '; // наименование продукта
// echo $basketPosition->getQuantity().' '; // количество товаров
// echo $basketPosition->getPrice(); // стоимость позиции 

 
$basket = new Basket();
$basket->addProduct(new Product('pizza', 500), 2);
$basket->addProduct(new Product('rolls', 600), 2);
$basket->addProduct(new Product('mango', 100), 6);
echo $basket->describe();


$order = new Order($basket, 700);
$order->getPrice();


