<?php
namespace ChocolateLib;

abstract class ChocolateFactory {
    public function orderSnack(string $type): Snack {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
        return $snack;
    }

    abstract protected function createSnack(string $type): Snack;
}

class MyChocolateFactory extends ChocolateFactory {
    protected function createSnack(string $type): Snack {
        return match($type) {
            'bar' => new ChocolateBar("Bounty", "Молочный", ["Кокос"]),
            'candy' => new Candy("Iriska", "Темный", ["Нуга"]),
            'truffle' => new Truffle("Premium", "Горький", ["Фундук"]),
            default => throw new \Exception("Неизвестный тип сладости"),
        };
    }
}
