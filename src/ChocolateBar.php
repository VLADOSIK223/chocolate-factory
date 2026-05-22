<?php

declare(strict_types=1);

namespace App;

class ChocolateBar extends Snack
{
    /**
     * Специфический метод нарезки для батончика.
     */
    public function cut(): void
    {
        echo "snack нужно резать по вертикали(кусочками, кубиками, плитками и т.д.)" . PHP_EOL;
    }
}
