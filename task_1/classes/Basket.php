<?php
require_once 'classes/Product.php';

class basket
{
    private $positionProducts = [];

    public function __construct(){
        $this->positionProducts = [];
    }

    public function addProduct(Product $product, $quantity)
    {
       $BasketPosition = new BasketPosition($product, $quantity);


    }
    public function getPrice()
    {

    }
    public function describe() 
    {
        return ' Наименование товара: ' .$product . ', Цена одной позиции: ' . $pricePosition . ', Количество: '. $number;
    }
}