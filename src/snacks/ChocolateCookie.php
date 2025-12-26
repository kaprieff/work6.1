<?php

declare(strict_types=1);

namespace work6\ChocolateSnack\snacks;

use work6\ChocolateSnack\Snack;

class ChocolateCookie extends Snack
{
    public function __construct()
    {
        parent::__construct(
            name: 'Шоколадное Печенье',
            chocolate: 'Белый шоколад',
            toppings: ['черника', 'миндаль']
        );
    }
}