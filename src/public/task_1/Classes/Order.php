<?php
require_once 'Basket.php';
require_once 'BasketPosition.php';

class Order
{
    private $basket;
    private $deliverPrice;

    public function __construct($basket,  $deliverPrice)
    {
        $this->basket = $basket;
        $this->deliverPrice = $deliverPrice;
    }

    public function getBasket() // возвращает объект-корзину, которая хранится в заказе
    {
        return $this;
    } 
      
    public function getPrice() // возвращает общую стоимость заказа. Сумма                              
    {                          // стоимости корзины и стоимости доставки заказа                         
        $totalPrice = $this->basket->getPrice() + $this->deliverPrice; 
        echo  'Сумма стоимости корзины- ' . $this->basket->getPrice() . '<br>' . 'Cтоимость доставки заказа- ' . $this->deliverPrice . '<br><b>Общая стоимость заказа-</b>  <b>' . $totalPrice . '</b><br>';
    }
}

