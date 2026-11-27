<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar
{
    public function __construct(
        public float $sisi,
    ) {
    }

    public function luas(): float
    {
        return $this->sisi * $this->sisi;
    }

    public function keliling(): float
    {
        return 4 * $this->sisi;
    }
}
