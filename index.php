<?php
require 'vendor/autoload.php';

use ChocolateLib\MyChocolateFactory;

$factory = new MyChocolateFactory();

echo "--- Заказ 1: Плитка ---\n";
$factory->orderSnack('bar');

echo "\n--- Заказ 2: Конфета ---\n";
$factory->orderSnack('candy');
