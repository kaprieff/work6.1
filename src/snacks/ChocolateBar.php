<?php

declare(strict_types=1);

namespace Work6\ChocolateSnack\snacks;

use Work6\ChocolateSnack\Snack;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        parent::__construct(
            name: 'Шоколадная Плитка',
            chocolate: 'Горький шоколад 70%',
            toppings: ['орехи', 'соль']
        );
    }
}