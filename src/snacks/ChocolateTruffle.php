<?php

declare(strict_types=1);

namespace work6\ChocolateSnack\snacks;

use work6\ChocolateSnack\Snack;

class ChocolateTruffle extends Snack
{
    public function __construct()
    {
        parent::__construct(
            name: 'Трюфель',
            chocolate: 'Молочный шоколад',
            toppings: ['ваниль', 'какао-порошок']
        );
    }
}