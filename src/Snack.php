<?php

declare(strict_types=1);

namespace Work6\ChocolateSnack;

class Snack
{
    public function __construct(
        protected string $name,
        protected string $chocolate,
        protected array $toppings
    ) {
    }

    public function prepare(): void
    {
        echo "Началась создание snack-а {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинок: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Snack {$this->name} нужно резать по вертикали (кусочками, кубиками, плитками и т.д.)\n";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChocolate(): string
    {
        return $this->chocolate;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }
}