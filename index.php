<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\MyChocolateFactory;

$factory = new MyChocolateFactory();
$factory->orderSnack('bar');
