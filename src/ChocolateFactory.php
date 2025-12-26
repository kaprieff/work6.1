<?php

declare(strict_types=1);

namespace Work6\ChocolateSnack;

use Work6\ChocolateSnack\snacks\ChocolateBar;
use Work6\ChocolateSnack\snacks\ChocolateTruffle;
use Work6\ChocolateSnack\snacks\ChocolateCookie;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
    }

    protected function createSnack(string $type): Snack
    {
        return match ($type) {
            'bar' => new ChocolateBar(),
            'truffle' => new ChocolateTruffle(),
            'cookie' => new ChocolateCookie(),
            default => throw new \InvalidArgumentException("Unknown snack type: {$type}")
        };
    }
}