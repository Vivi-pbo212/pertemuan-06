<?php

declare(strict_types=1);

abstract class BangunDatar
{
    abstract public function luas(): float;

    abstract public function keliling(): float;

    public function ringkasan(): string
    {
        return static::class . ' | Luas: ' . round($this->luas(), 2) . ' | Keliling: ' . round($this->keliling(), 2);
    }
}
