<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class MyChocolateFactory
{
    /**
     * Создает объект сладости на основе переданного типа.
     *
     * @param string $type
     * @return Snack
     */
    public function createSnack(string $type): Snack
    {
        return match ($type) {
            'bar' => new ChocolateBar('Шоколадный батончик', 'Молочный', ['Арахис', 'Карамель']),
            default => throw new InvalidArgumentException("Неизвестный тип сладости: {$type}"),
        };
    }

    /**
     * Заказывает сладость, готовит её и нарезает.
     *
     * @param string $type
     * @return Snack
     */
    public function orderSnack(string $type): Snack
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();

        return $snack;
    }
}
