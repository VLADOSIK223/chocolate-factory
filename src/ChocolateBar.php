<?php

declare(strict_types=1);

namespace App;

use App\Core\Snack; 

class ChocolateBar extends Snack
{
    public function cut(): void
    {
        echo "snack нужно резать по вертикали(кусочками, кубиками, плитками и т.д.)" . PHP_EOL;
    }
}
