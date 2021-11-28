<?php
require_once 'Product.php';
require_once 'Basket.php';

class BasketPosition
{
    private  $product; // товар
    private $quantity; // кол-во

    public function __construct($product, $quantity)
    {
        $this->product= $product;
        $this->quantity = $quantity;
    }

    public function getProduct(){ //  возвращает наименование товара в этой позиции
        return $this->product->getName();
    }

    public function getQuantity() //возвращает количество товаров в этой позиции
    {
       return $this->quantity;
    }
    
    public function getPrice(){ // — возвращает стоимость позиции.
        return $this->product-> getPrice();
    }
}