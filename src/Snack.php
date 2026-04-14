<?php
namespace ChocolateLib;

abstract class Snack {
    public string $name;
    public string $chocolate;
    public array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings) {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void {
        echo "Началось создание snack-a {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинки: " . implode(", ", $this->toppings) . "\n";
    }

    abstract public function cut(): void;
}
