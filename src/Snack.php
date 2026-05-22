<?php

declare(strict_types=1);

namespace App;

abstract class Snack
{
    /**
     * @param string[] $toppings
     */
    public function __construct(
        protected string $name,
        protected string $chocolate,
        protected array $toppings
    ) {
    }

    /**
     * Подготовка сладости.
     */
    public function prepare(): void
    {
        echo "Началась создание snack-а {$this->name}" . PHP_EOL;
        echo "Добавляется шоколад {$this->chocolate}" . PHP_EOL;
        echo "Добавлены начинок: " . implode(', ', $this->toppings) . PHP_EOL;
    }

    /**
     * Нарезка сладости (реализуется в дочерних классах).
     */
    abstract public function cut(): void;
}
