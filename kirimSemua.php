<?php

declare(strict_types=1);

require_once __DIR__ . '/Notifikasi.php';

/**
 * @param array<int, Notifikasi> $notifikasi
 * @return array<int, string>
 */
function kirimSemua(array $notifikasi, string $pesan): array
{
    $hasil = [];

    foreach ($notifikasi as $kanal) {
        if ($kanal instanceof Notifikasi) {
            $hasil[] = $kanal->kirim($pesan);
        }
    }

    return $hasil;
}
