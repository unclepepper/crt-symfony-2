<?php

require_once 'Product.php';
require_once 'BasketPosition.php';
require_once 'Basket.php';

class Basket
{
    private $positionProducts = []; // массив позиций товаров

    public function __construct(){
        $this->positionProducts = [];
    }

    public function addProduct(Product $product, $quantity):string // создаёт новую
    {
         return  $this->basketPositions[] = array_push($this->positionProducts, new BasketPosition($product, $quantity));      
    }

    public function getPrice() // — возвращает стоимость всех позиций в корзине
    {
        $total=0;
        foreach ($this->positionProducts as $value){
           $total = $total+($value->getPrice() * $value->getQuantity());
        } 
        return $total;
    }
    
    public function describe() // выводит или возвращает информацию о корзине в виде строки
    {
        foreach ($this->positionProducts as $value){
            echo  'Наименование товара- ' . $value->getProduct() . ', <br>Цена одной позиции- ' . $value->getPrice() . ',  <br>Количество- ' . $value->getQuantity() . '<br>';
        }
        // <Наименование товара> - <Цена одной позиции> - <Количество>
      
    }
}