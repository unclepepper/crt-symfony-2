<?php

class Product
{
    private $nameProduct; // название продукта
    private $priceProduct; // цена продукта

    public function __construct($nameProduct, $priceProduct)
    {
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
    }

    public function getName()
    {
        return $this->nameProduct; //возвращает наименование товара
    }

    public function getPrice()
    {
        return   $this->priceProduct; //возвращает стоимость товара.
    }

}


