<?php
require_once 'classes/Order.php';
require_once 'classes/Basket.php';
require_once 'classes/BasketPosition.php';
require_once 'classes/Product.php';




$order = new Order($basket);

echo "Заказ, на сумму: <сумма заказа> Состав: <информация о
корзине>";