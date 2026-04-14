<?php
namespace ChocolateLib;

class ChocolateBar extends Snack {
    public function cut(): void {
        echo "Snack {$this->name} нужно резать плитками.\n";
    }
}

class Candy extends Snack {
    public function cut(): void {
        echo "Snack {$this->name} нужно резать кубиками.\n";
    }
}

class Truffle extends Snack {
    public function cut(): void {
        echo "Snack {$this->name} нужно резать по вертикали.\n";
    }
}
