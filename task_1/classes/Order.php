<?php
class Order
{

   private $basket;
   private $deliverPrice;

    public function __construct($basket,  $deliverPrice)
    {
        $this->basket = $basket;
        $this->deliverPrice = $deliverPrice;

    }

    public function getBasket()
    {

        return $this;
    }   
    public function getPrice($price)
    {
        $totalPrice += $price; 

    }
}

